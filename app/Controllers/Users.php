<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $users = $model->findAll();

        return view('users', [
            'users' => $users
        ]);
    }

    public function newUser()
    {
        return view('users/new');
    }

    public function create()
    {
        $model = new UserModel();

        $rules = [
            'username'  => 'required|is_unique[users.username]',
            'full_name' => 'required',
            'email'     => 'permit_empty|valid_email',
            'password'  => 'required|min_length[8]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $model->insert($data);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $model = new UserModel();

        $user = $model->find($id);

        if (!$user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(
                'User not found'
            );
        }

        return view('users/edit', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $model = new UserModel();

        $user = $model->find($id);

        if (!$user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(
                'User not found'
            );
        }

        $rules = [
            'username'  => 'required',
            'full_name' => 'required',
            'email'     => 'permit_empty|valid_email',
            'avatar'    => 'permit_empty|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email')
        ];

        $avatar = $this->request->getFile('avatar');

        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {
            $avatarName = $avatar->getRandomName();
            $uploadPath = FCPATH . 'uploads/avatars/';

            $avatar->move($uploadPath, $avatarName);

            $imagePath = $uploadPath . $avatarName;

            service('image')
                ->withFile($imagePath)
                ->fit(300, 300)
                ->save($imagePath);

            $data['avatar'] = $avatarName;
        }

        $model->update($id, $data);

        return redirect()->to('/users');
    }
}