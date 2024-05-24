<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        helper(['form']);
        $data = [];

        if ($this->request->getMethod() == 'POST') {
            // // Validate form input
            // echo $this->request->getVar('username');
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'email'    => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]'
            ];
            
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                // Save the user
                $model = new UserModel();

                $newData = [
                    'username' => $this->request->getPost('username'),
                    'email'    => $this->request->getPost('email'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                ];
                // var_dump($newData);
                $model->save($newData);
                return redirect()->to('/auth/login');
            }
        }else{
            echo view('auth/register', $data);
        }

        
    }

    public function login()
    {
        helper(['form']);
        $data = [];

        if ($this->request->getMethod() == 'POST') {
            // Validate form input
            $rules = [
                'email'    => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getPost('email'))->first();

                if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                    $this->setUserSession($user);
                    return redirect()->to('/');
                } else {
                    $data['error'] = 'Invalid login credentials';
                }
            }
        }

        echo view('auth/login', $data);
    }

    private function setUserSession($user)
    {
        $data = [
            'id'       => $user['id'],
            'username' => $user['username'],
            'email'    => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
