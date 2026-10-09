<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        // Check password via hash_verify or fallback to plain text if needed
        if ($user && (password_verify($password, $user['password']) || $password === $user['password'])) {
            $session->set([
                'id'        => $user['id'],
                'username'  => $user['username'],
                'logged_in' => true
            ]);
            return redirect()->to('/customers');
        }

        return redirect()->back()->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}