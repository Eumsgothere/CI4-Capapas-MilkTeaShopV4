<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminAccountsController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();

        $data = [
            'users' => $users
        ];

        return view('admin/accounts', $data);
    }
}
