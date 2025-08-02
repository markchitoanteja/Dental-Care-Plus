<?php

namespace App\Controllers;

use App\Models\Appointment_Model;
use App\Models\Profile_Model;
use App\Models\User_Model;

class Client extends BaseController
{
    private function redirectIfNotClient()
    {
        $user = session()->get('user');

        // Case 1: User not logged in
        if (!$user) {
            session()->setFlashdata([
                'type' => 'error',
                'message' => 'You must be logged in to access this page.',
            ]);
            return redirect()->to(base_url('/')); // Redirect to homepage
        }

        // Case 2: Logged in but not a regular client
        if (!isset($user['user_type']) || $user['user_type'] !== 'user') {
            session()->setFlashdata([
                'type' => 'error',
                'message' => 'You do not have permission to access this page.',
            ]);

            // You may redirect to admin dashboard or back to previous page
            return redirect()->to(base_url('admin/dashboard'));
        }

        return null; // Access granted
    }

    public function dashboard()
    {
        // Restrict access
        $redirect = $this->redirectIfNotClient();
        if ($redirect) return $redirect;

        session()->set('current_page', 'dashboard');
        session()->set('page_title', 'Dashboard');
        session()->set('page_description', 'Account Analytics Overview');

        $Appointment_Model = new Appointment_Model();
        $user = session()->get('user');
        $client_id = $user['id'];

        $appointments = $Appointment_Model
            ->where('client_id', $client_id)
            ->orderBy('appointment_date', 'DESC')
            ->findAll();

        $appointmentCount = count($appointments);

        return view("landing/layouts/header") .
            view("client/dashboard", [
                'appointments' => $appointments,
                'appointmentCount' => $appointmentCount,
            ]) .
            view("landing/layouts/footer");
    }

    public function profile()
    {
        // Restrict access
        $redirect = $this->redirectIfNotClient();
        if ($redirect) return $redirect;

        session()->set('current_page', 'profile');
        session()->set('page_title', 'Profile');
        session()->set('page_description', 'Personal Details');

        $user = session()->get('user');
        $userId = $user['id'];

        $Profile_Model = new Profile_Model();
        $User_Model = new User_Model();

        $profile = $Profile_Model->where('user_id', $userId)->first();
        $userData = $User_Model->find($userId);

        return view("landing/layouts/header") .
            view("client/profile", [
                'profile' => $profile,
                'user' => $userData,
            ]) .
            view("landing/layouts/footer");
    }

    public function update_profile()
    {
        if (!$this->request->isAJAX()) {
            return $this->response->setStatusCode(400)->setJSON([
                'success' => false,
                'message' => 'Invalid request type.',
            ]);
        }

        $user = session()->get('user');

        if (!$user || $user['user_type'] !== 'user') {
            return $this->response->setStatusCode(403)->setJSON([
                'success' => false,
                'message' => 'Unauthorized access.',
            ]);
        }

        $userId = $user['id'];

        $User_Model = new User_Model();
        $Profile_Model = new Profile_Model();

        // Get posted data
        $name      = trim($this->request->getPost('name'));
        $email     = trim($this->request->getPost('email'));
        $phone     = trim($this->request->getPost('phone'));
        $address   = trim($this->request->getPost('address'));
        $birthdate = trim($this->request->getPost('birthdate'));
        $gender    = trim($this->request->getPost('gender'));

        // Email validation
        $emailExists = $User_Model
            ->where('email', $email)
            ->where('id !=', $userId)
            ->first();

        if ($emailExists) {
            return $this->response->setJSON([
                'success' => false,
                'field' => 'email',
                'message' => 'Email is already in use by another account.',
            ]);
        }

        // ✅ Handle image upload
        $imageName = $user['image'] ?? null;
        $imageFile = $this->request->getFile('image');

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $newName = uniqid('client_') . '.' . $imageFile->getExtension();
            $uploadPath = FCPATH . 'public/uploads/client';

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $imageFile->move($uploadPath, $newName);

            // Delete old image if not default
            if (!empty($imageName) && $imageName !== 'default-user-image.webp') {
                $oldPath = $uploadPath . '/' . $imageName;
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $imageName = $newName;
        }

        // ✅ Update `users` table
        $User_Model->update($userId, [
            'name'  => $name,
            'email' => $email,
            'image' => $imageName,
        ]);

        // ✅ Update or Insert `profiles` table
        $existingProfile = $Profile_Model->where('user_id', $userId)->first();

        $profileData = [
            'user_id'   => $userId,
            'phone'     => $phone,
            'address'   => $address,
            'birthdate' => $birthdate,
            'gender'    => $gender,
        ];

        if ($existingProfile) {
            $Profile_Model->update($existingProfile['id'], $profileData);
        } else {
            $Profile_Model->insert($profileData);
        }

        // ✅ Update session name + email + image
        $updatedUser = $User_Model->find($userId);
        session()->set('user', $updatedUser);

        session()->setFlashdata([
            'type' => 'success',
            'message' => 'Your profile has been updated successfully.',
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Profile updated successfully.',
        ]);
    }

    public function change_password()
    {
        if (!$this->request->isAJAX()) {
            return $this->response->setStatusCode(400)->setJSON([
                'success' => false,
                'message' => 'Invalid request type.',
            ]);
        }

        $user = session()->get('user');

        if (!$user || $user['user_type'] !== 'user') {
            return $this->response->setStatusCode(403)->setJSON([
                'success' => false,
                'message' => 'Unauthorized access.',
            ]);
        }

        $User_Model = new \App\Models\User_Model();
        $userData = $User_Model->find($user['id']);

        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // Validate current password
        if (!password_verify($currentPassword, $userData['password'])) {
            return $this->response->setJSON([
                'success' => false,
                'field' => 'current_password',
                'message' => 'Current password is incorrect.',
            ]);
        }

        // Validate new password format
        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_]).{8,}$/', $newPassword)) {
            return $this->response->setJSON([
                'success' => false,
                'field' => 'new_password',
                'message' => 'Password must be at least 8 characters, include letters, numbers, and symbols.',
            ]);
        }

        // Match confirm password
        if ($newPassword !== $confirmPassword) {
            return $this->response->setJSON([
                'success' => false,
                'field' => 'confirm_password',
                'message' => 'New password and confirm password do not match.',
            ]);
        }

        // Save hashed password
        $User_Model->update($user['id'], [
            'password' => password_hash($newPassword, PASSWORD_DEFAULT),
        ]);

        session()->setFlashdata([
            'type' => 'success',
            'message' => 'Your password has been changed successfully.',
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Password changed successfully.',
        ]);
    }

    public function appointments()
    {
        // Restrict access
        $redirect = $this->redirectIfNotClient();
        if ($redirect) return $redirect;

        session()->set('current_page', 'appointments');
        session()->set('page_title', 'Appointments');
        session()->set('page_description', 'Appointment History & Status');

        $Appointment_Model = new Appointment_Model();
        $user = session()->get('user');
        $client_id = $user['id'];

        // Fetch appointments for the logged-in client
        $appointments = $Appointment_Model
            ->where('client_id', $client_id)
            ->orderBy('appointment_date', 'DESC')
            ->findAll();

        return view("landing/layouts/header") .
            view("client/appointments", [
                'appointments' => $appointments,
            ]) .
            view("landing/layouts/footer");
    }

    public function delete_appointment($id = null)
    {
        if (!$this->request->isAJAX()) {
            return $this->response->setStatusCode(400)->setJSON([
                'success' => false,
                'message' => 'Invalid request.',
            ]);
        }

        $user = session()->get('user');
        if (!$user || $user['user_type'] !== 'user') {
            return $this->response->setStatusCode(403)->setJSON([
                'success' => false,
                'message' => 'Unauthorized.',
            ]);
        }

        $Appointment_Model = new Appointment_Model();
        $appointment = $Appointment_Model->find($id);

        if (!$appointment || $appointment['client_id'] != $user['id']) {
            return $this->response->setStatusCode(404)->setJSON([
                'success' => false,
                'message' => 'Appointment not found.',
            ]);
        }

        // Check if appointment is still upcoming
        $appointmentDateTime = strtotime($appointment['appointment_date'] . ' ' . $appointment['appointment_time']);
        if ($appointmentDateTime <= time()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Only upcoming appointments can be canceled.',
            ]);
        }

        $Appointment_Model->delete($id);

        // 🔔 Set flashdata for success
        session()->setFlashdata([
            'type'    => 'success',
            'message' => 'Appointment canceled successfully.',
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Appointment canceled successfully.',
        ]);
    }
}
