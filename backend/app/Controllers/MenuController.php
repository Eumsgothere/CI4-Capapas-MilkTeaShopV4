<?php

namespace App\Controllers;

use App\Models\MenuModel;

class MenuController extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $data = [
            'menuItems' => $menuModel->findAll()
        ];
        return view('user/menu', $data);
    }
}
