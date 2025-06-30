<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'password' => '$2y$10$5P/8eIkUEDlDDxwBDQW53Owbf7ohvi8J9KDzna.u2u5LgSKwj4Prq', // senha: 123
            'role'     => 'admin',
        ];

        $this->db->table('users')->insert($data);
    }
}
