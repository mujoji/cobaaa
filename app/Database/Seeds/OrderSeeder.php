<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => '1775VP',
            'game'    => 'VALORANT',
            'price'    => 177000,
            'status'    => 'Ordered',
        ];

        // Simple Queries
        $this->db->table('order')->insert($data);
        
        $data = [
            'name' => '2300VP',
            'game'    => 'VALORANT',
            'price'    => 235000,
            'status'    => 'Ordered',
        ];
        // Using Query Builder
        $this->db->table('order')->insert($data);
    }
}