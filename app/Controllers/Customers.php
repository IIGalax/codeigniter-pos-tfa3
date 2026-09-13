<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@email.com', 'phone' => '09171234567'],
            ['name' => 'Maria Santos', 'email' => 'maria@email.com', 'phone' => '09182345678'],
            ['name' => 'Pedro Reyes', 'email' => 'pedro@email.com', 'phone' => '09193456789'],
            ['name' => 'Ana Garcia', 'email' => 'ana@email.com', 'phone' => '09204567890'],
            ['name' => 'Jose Ramos', 'email' => 'jose@email.com', 'phone' => '09215678901'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}