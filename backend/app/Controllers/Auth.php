<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        $request = $this->request;

        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $email = $request->getPost('email');
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) { // <-- change here
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }


        $session->set('user', [
            'id'         => $userArr['id'] ?? null,
            'email'      => $userArr['email'] ?? null,
            'first_name' => $userArr['first_name'] ?? null,
            'last_name'  => $userArr['last_name'] ?? null,
            'type'       => $userArr['type'] ?? 'client',
            'display_name' => trim(
                ($userArr['first_name'][0] ?? '') . ' ' .
                    ($userArr['middle_name'][0] ?? '') . ' ' .
                    ($userArr['last_name'] ?? '')
            ),
        ]);


        $type = strtolower($userArr['type'] ?? 'client');

        if ($type === 'manager' || $type === 'admin') {
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->to('/');
    }


    public function signup()
    {
        $session = session();
        $request = service('request');
        $post = $request->getPost();

        $validation = \Config\Services::validation();
        $validation->setRule('username', 'Username', 'required|min_length[2]|max_length[50]');
        $validation->setRule('first_name', 'First Name', 'required|min_length[2]|max_length[50]');
        $validation->setRule('last_name', 'Last Name', 'required|min_length[2]|max_length[50]');
        $validation->setRule('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $validation->setRule('password', 'Password', 'required|min_length[6]');
        $validation->setRule('confirm_password', 'Confirm Password', 'required|matches[password]');

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userData = [
            'username'      => $post['username'],
            'first_name'    => $post['first_name'],
            'middle_name'   => $post['middle_name'] ?? null,
            'last_name'     => $post['last_name'],
            'email'         => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type'          => 'client',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];

        $userModel = new \App\Models\UserModel();
        $inserted = $userModel->insert($userData);

        if ($inserted) {
            $session->setFlashdata('success', 'Account created successfully. You can now login.');
            return redirect()->to('/login');
        } else {
            $session->setFlashdata('errors', ['general' => 'Failed to create account. Please try again.']);
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);

        return redirect()->to('/');
    }
}
