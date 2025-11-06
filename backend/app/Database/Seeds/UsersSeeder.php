<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $users = [
            [
                'username'        => 'Eums',
                'first_name'      => 'Naomie',
                'middle_name'     => null,
                'last_name'       => 'Capapas',
                'email'           => 'eumie.capapas@gmail.com',
                'type'            => 'client',
                'password_hash'   => $password,
                'created_at'      => $now,
                'updated_at'      => $now,
            ],
            [
                'username'        => 'admin',
                'first_name'      => 'Admin',
                'middle_name'     => null,
                'last_name'       => 'User',
                'email'           => 'ngcapapas@fit.edu.ph.com',
                'type'            => 'admin',
                'password_hash'   => $password,
                'created_at'      => $now,
                'updated_at'      => $now,
            ],
        ];

        $builder = $this->db->table('users');

        foreach ($users as $user) {
            // Check if user already exists by email
            $existing = $builder->where('email', $user['email'])->get()->getRowArray();

            if ($existing) {
                // Update existing user
                $builder->where('email', $user['email'])->update($user);
            } else {
                // Insert new user
                $builder->insert($user);
            }
        }
    }
}
