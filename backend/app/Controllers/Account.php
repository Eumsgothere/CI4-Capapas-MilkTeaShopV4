<?php

namespace App\Controllers;

use App\Models\UserModel;

class Accounts extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('accounts', $data);
    }
}
