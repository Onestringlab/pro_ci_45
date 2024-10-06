<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        if ($session->get('role') == 'admin') {
            return view('admin_dashboard');
        } else {
            return view('user_dashboard');
        }
    }
}
