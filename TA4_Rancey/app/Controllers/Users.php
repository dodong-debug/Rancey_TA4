<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }

    public function new()
    {
        helper(['form']);
        return view('users/create');
    }

    public function create()
    {
        helper(['form']);
        $model = new UserModel();

        $rules = [
            'username'  => 'required|is_unique[users.username]',
            'full_name' => 'required',
            'email'     => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            return view('users/create', [
                'validation' => $this->validator
            ]);
        }

        $model->save([
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        helper(['form']);
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('users/edit', $data);
    }

    public function update($id)
    {
        helper(['form']);
        $model = new UserModel();

        $rules = [
            'avatar' => 'uploaded[avatar]|max_size[avatar,2048]|ext_in[avatar,jpg,png,jpeg]'
        ];

        $avatarName = $model->find($id)['avatar'] ?? null;

        $file = $this->request->getFile('avatar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            if ($this->validate($rules)) {
                $avatarName = $file->getRandomName();
                $file->move(FCPATH . 'uploads', $avatarName);
            } else {
                $data['user'] = $model->find($id);
                $data['validation'] = $this->validator;
                return view('users/edit', $data);
            }
        }

        $model->update($id, [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'avatar'    => $avatarName
        ]);

        return redirect()->to('/users');
    }
}