<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $data = [
            [
                'username'    => 'Eums',
                'first_name'  => 'Naomie',
                'middle_name' => null,
                'last_name'   => 'Capapas',
                'email'       => 'eumie.capapas@gmail.com',
                'password_hash' => $password,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'username'    => 'admin',
                'first_name'  => 'Admin',
                'middle_name' => null,
                'last_name'   => 'User',
                'email'       => 'ngcapapas@fit.edu.ph.com',
                'password_hash' => $password,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
