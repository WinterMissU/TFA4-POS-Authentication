<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserPasswordSeeder extends Seeder
{
    public function run()
    {
        $passwords = [
            'arivera' => 'Password123!',
            'scruz'   => 'Password123!',
            'jsantos' => 'Password123!',
            'preyes'  => 'Password123!',
            'tlim'    => 'Password123!',
        ];

        foreach ($passwords as $username => $password) {
            $this->db->table('users')
                ->where('username', $username)
                ->update([
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ]);
        }
    }
}