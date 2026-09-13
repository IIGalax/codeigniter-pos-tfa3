<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'jcruz', 'name' => 'Juan Cruz', 'role' => 'Admin'],
            ['username' => 'msantos', 'name' => 'Maria Santos', 'role' => 'Cashier'],
            ['username' => 'preyes', 'name' => 'Pedro Reyes', 'role' => 'Manager'],
            ['username' => 'agarcia', 'name' => 'Ana Garcia', 'role' => 'Cashier'],
            ['username' => 'jramos', 'name' => 'Jose Ramos', 'role' => 'Staff'],
        ];

        return view('users', ['users' => $users]);
    }
}