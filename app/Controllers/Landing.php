<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index()
    {
        session()->set('current_page', 'home');
        session()->set('page_title', 'Trusted Dental Services in Can-avid, Eastern Samar');

        $body = view("landing/home");
        $footer = view("landing/layouts/footer");

        if (session()->has('user')) {
            $user = session()->get('user');

            if (isset($user['user_type']) && $user['user_type'] === 'user') {
                return $body . $footer;
            } else {
                return redirect()->to(base_url('admin/dashboard'));
            }
        }

        return $body . $footer;
    }
    
    public function home()
    {
        return redirect()->to(base_url());
    }

    public function about_us()
    {
        session()->set('current_page', 'about_us');
        session()->set('page_title', 'About Us');
        session()->set('page_description', 'Learn More About Us');

        $header = view("landing/layouts/header");
        $body = view("landing/about_us");
        $footer = view("landing/layouts/footer");

        if (session()->has('user')) {
            $user = session()->get('user');

            if (isset($user['user_type']) && $user['user_type'] === 'user') {
                return $header . $body . $footer;
            } else {
                return redirect()->to(base_url('admin/dashboard'));
            }
        }

        return $header . $body . $footer;
    }
    
    public function services()
    {
        session()->set('current_page', 'services');
        session()->set('page_title', 'Our Services');
        session()->set('page_description', 'Our Services Keep You Smiling');

        $header = view("landing/layouts/header");
        $body = view("landing/services");
        $footer = view("landing/layouts/footer");

        if (session()->has('user')) {
            $user = session()->get('user');

            if (isset($user['user_type']) && $user['user_type'] === 'user') {
                return $header . $body . $footer;
            } else {
                return redirect()->to(base_url('admin/dashboard'));
            }
        }

        return $header . $body . $footer;
    }

    public function contact_us()
    {
        session()->set('current_page', 'contact_us');
        session()->set('page_title', 'Contact Us');
        session()->set('page_description', 'Get in Touch with Us');

        $header = view("landing/layouts/header");
        $body = view("landing/contact_us");
        $footer = view("landing/layouts/footer");

        if (session()->has('user')) {
            $user = session()->get('user');

            if (isset($user['user_type']) && $user['user_type'] === 'user') {
                return $header . $body . $footer;
            } else {
                return redirect()->to(base_url('admin/dashboard'));
            }
        }

        return $header . $body . $footer;
    }
}
