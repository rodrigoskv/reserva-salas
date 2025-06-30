<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        $reservas = [
            ['user_id' => 1, 'room_id' => 1,  'date' => date('Y-m-d', strtotime('+1 day')),  'start_time' => '09:00:00', 'end_time' => '10:00:00'],
            ['user_id' => 1, 'room_id' => 2,  'date' => date('Y-m-d', strtotime('+2 day')),  'start_time' => '10:00:00', 'end_time' => '11:00:00'],
            ['user_id' => 1, 'room_id' => 3,  'date' => date('Y-m-d', strtotime('+3 day')),  'start_time' => '14:00:00', 'end_time' => '15:30:00'],
            ['user_id' => 1, 'room_id' => 4,  'date' => date('Y-m-d', strtotime('+4 day')),  'start_time' => '08:00:00', 'end_time' => '09:30:00'],
            ['user_id' => 1, 'room_id' => 5,  'date' => date('Y-m-d', strtotime('+5 day')),  'start_time' => '13:00:00', 'end_time' => '14:00:00'],
            ['user_id' => 1, 'room_id' => 6,  'date' => date('Y-m-d', strtotime('+6 day')),  'start_time' => '15:00:00', 'end_time' => '17:00:00'],
            ['user_id' => 1, 'room_id' => 7,  'date' => date('Y-m-d', strtotime('+7 day')),  'start_time' => '10:00:00', 'end_time' => '12:00:00'],
            ['user_id' => 1, 'room_id' => 8,  'date' => date('Y-m-d', strtotime('+8 day')),  'start_time' => '07:30:00', 'end_time' => '08:30:00'],
            ['user_id' => 1, 'room_id' => 9,  'date' => date('Y-m-d', strtotime('+9 day')),  'start_time' => '09:00:00', 'end_time' => '10:00:00'],
            ['user_id' => 1, 'room_id' => 10, 'date' => date('Y-m-d', strtotime('+10 day')), 'start_time' => '11:00:00', 'end_time' => '12:00:00'],
        ];

        $this->db->table('reservations')->insertBatch($reservas);
    }
}
