<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\OrderModel;
use App\Models\MenuModel;

class AdminDashboard extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $orderModel = new OrderModel();
        $menuModel = new MenuModel();

        $data = [
            'totalUsers' => $userModel->countAll(),
            'totalOrders' => $orderModel->countAll(),
            'totalMenuItems' => $menuModel->countAll()
        ];

        return view('admin/dashboard', $data);
    }
}
