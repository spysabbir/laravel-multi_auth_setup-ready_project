<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
        return view('frontend.auth.register');
    }

    public function login() {
        return view('frontend.auth.login');
    }

    public function dashboard() {
        return view('frontend.user.dashboard');
    }
}
