<?php

namespace App\Controllers\Administrator\Login;

use function set_flash;
use App\Core\Controller;
use App\Models\Administrator\Login\Login as LoginModel;

class Login extends Controller
{
    public function index()
    {
        $this->view('administrator/login/login');
    }

    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS)) ?? '';
            $password = $_POST['password'] ?? '';

            $adminModel = new LoginModel();
            $admin = $adminModel->getByUsername($username);

            if ($admin && password_verify($password, $admin['password'])) {
                $_SESSION['admin'] = $admin;
                session_regenerate_id(true);
                redirect('/administrator/dashboard');
            } else {
                set_flash('error', 'Invalid username or password');
                redirect('/administrator/login');
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        redirect('/administrator/login');
        exit;
    }
}
