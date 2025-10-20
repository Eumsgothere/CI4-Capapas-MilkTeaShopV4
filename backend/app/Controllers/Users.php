<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }
    public function login()
    {
        return view('user/login');
    }
    public function signup()
    {
        return view('user/signup');
    }
    public function moodboard()
    {
        return view('user/moodboard');
    }
}
