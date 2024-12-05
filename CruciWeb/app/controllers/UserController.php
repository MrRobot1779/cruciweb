<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/User.php';

class UserController extends Controller {
    public function register() {
        $this->loadView('user/register');
    }

    public function login() {
        $this->loadView('user/login');
    }
}
