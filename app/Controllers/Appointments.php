<?php

namespace App\Controllers;

use App\Models\Appointment_Model;

class Appointments extends BaseController
{
    public function store()
    {
        $Appointment_Model = new Appointment_Model();

        $data = [
            'client_id' => $this->request->getPost("client_id"),
            'service' => $this->request->getPost("service"),
            'appointment_date' => $this->request->getPost("appointment_date"),
            'appointment_time' => $this->request->getPost("appointment_time"),
            'phone' => $this->request->getPost("phone"),
        ];

        $success = false;
        $error_type = null;

        if ($Appointment_Model->insert($data)) {
            $success = true;

            session()->setFlashdata([
                "type" => "success",
                "message" => "Appointment created successfully!",
            ]);
        } else {
            $success = false;
            $error_type = "db_error";
        }

        return $this->response->setJSON([
            "success" => $success,
            "error_type" => $error_type
        ]);
    }
}
