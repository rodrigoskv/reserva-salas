<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Laboratório de Informática 1', 'capacity' => 30],
            ['name' => 'Laboratório de Informática 2', 'capacity' => 30],
            ['name' => 'Laboratório de Informática 3', 'capacity' => 30],
            ['name' => 'Laboratório de Informática 4', 'capacity' => 30],
            ['name' => 'Laboratório de Informática 5', 'capacity' => 30],
            ['name' => 'Auditório A', 'capacity' => 100],
            ['name' => 'Auditório B', 'capacity' => 120],
            ['name' => 'Sala A1', 'capacity' => 20],
            ['name' => 'Sala A2', 'capacity' => 25],
            ['name' => 'Sala A3', 'capacity' => 30],
            ['name' => 'Sala B1', 'capacity' => 20],
            ['name' => 'Sala B2', 'capacity' => 25],
            ['name' => 'Sala B3', 'capacity' => 30],
            ['name' => 'Sala C1', 'capacity' => 20],
            ['name' => 'Sala C2', 'capacity' => 25],
            ['name' => 'Sala C3', 'capacity' => 30],
        ];

        $this->db->table('rooms')->insertBatch($data);
    }
}
