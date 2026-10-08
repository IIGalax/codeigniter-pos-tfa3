<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // already logged in? skip the form
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/users');
        }

        return view('auth/login');
    }

    public function attempt()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Username and password are required.');
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = (new UserModel())->where('username', $username)->first();

        // same message whether the username or the password is wrong
        if (! $user || empty($user['password']) || ! password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }

        $session = session();
        $session->regenerate();
        $session->set([
            'user_id'    => $user['id'],
            'username'   => $user['username'],
            'full_name'  => $user['full_name'],
            'isLoggedIn' => true,
        ]);

        return redirect()->to('/users');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login')->with('success', 'You have been logged out.');
    }
}