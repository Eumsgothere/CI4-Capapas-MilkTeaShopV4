<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminOrdersController extends BaseController
{
    public function orders()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('orders');
        $builder->select('orders.id, orders.user_id, orders.quantity, orders.total_price, orders.status, orders.created_at, menu.name AS menu_name, users.first_name, users.last_name');
        $builder->join('menu', 'menu.id = orders.menu_id');
        $builder->join('users', 'users.id = orders.user_id', 'left');
        $orders = $builder->get()->getResultArray();

        $data = ['orders' => $orders];
        return view('admin/orders', $data);
    }
}
