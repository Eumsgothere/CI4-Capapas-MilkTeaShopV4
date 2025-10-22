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
                'first_name' => 'Naomie',
                'middle_name' => null,
                'last_name' => 'Capapas',
                'email' => 'eumie.capapas@gmail.com',
                'password_hash' => $password,
                'type' => 'client',
                'account_status' => 1,
                'email_activated' => 1,
                'newsletter' => 1,
                'gender' => 'Female',
                'profile_image' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Admin',
                'middle_name' => null,
                'last_name' => 'User',
                'email' => 'ngcapapas@fit.edu.ph.com',
                'password_hash' => $password,
                'type' => 'admin',
                'account_status' => 1,
                'email_activated' => 1,
                'newsletter' => 0,
                'gender' => 'Female',
                'profile_image' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
