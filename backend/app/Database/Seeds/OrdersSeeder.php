<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [
            [
                'user_id'     => 1,
                'menu_id'     => 1,
                'quantity'    => 2,
                'total_price' => 120.00,
                'status'      => 'pending',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'user_id'     => 2,
                'menu_id'     => 2,
                'quantity'    => 1,
                'total_price' => 60.00,
                'status'      => 'confirmed',
                'created_at'  => $now,
                'updated_at'  => $now,
            ]
        ];

        $this->db->table('orders')->insertBatch($data);
    }
}
