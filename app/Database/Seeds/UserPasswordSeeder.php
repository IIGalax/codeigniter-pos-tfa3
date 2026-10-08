<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserPasswordSeeder extends Seeder
{
    public function run()
    {
        $hash = password_hash('password123', PASSWORD_DEFAULT);

        $this->db->table('users')
            ->where('id >', 0)
            ->update(['password' => $hash]);
    }
}