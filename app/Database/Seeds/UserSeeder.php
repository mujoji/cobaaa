<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'shifa',
            'email'    => 'shifa@gmail.com',
            'password'    => md5("shifa"),
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);
    }
}
