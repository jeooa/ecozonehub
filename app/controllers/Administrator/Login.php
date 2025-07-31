<?php

namespace App\Controllers\Administrator;

use App\Core\Controller;
use App\Models\Administrator;

class Login extends Controller
{
    public function index()
    {
        $this->view('administrator/login');
    }

    public function authenticate()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $adminModel = new Administrator();
            $admin = $adminModel->getByUsername($username);

            if ($admin && $password === $admin['password']) {
                $_SESSION['admin'] = $admin;
                header('Location: ' . baseurl() . '/administrator/dashboard');
                exit;
            } else {
                $_SESSION['error'] = 'Invalid username or password';
                header('Location: ' . baseurl() . '/administrator/login');
                exit;
            }
        }
    }


    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        unset($_SESSION['admin']);
        header('Location: ' . baseurl() . '/administrator/login');
        exit;
    }

}
