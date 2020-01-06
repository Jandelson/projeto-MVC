<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = (new User())->selectAll();
        return $this->twig->display('index.html', [
            'nome' => 'Jandelson',
            'hoje' => \today(),
            'users' => $users
        ]);
    }

    public function store($data)
    {
        if (empty($data['nome'])) {
            redirect('projeto');
        } else {
            $users = (new User())->save($data);
            if ($users) {
                redirect('projeto');
            }
        }
    }

    public function delete($id)
    {
        $users = (new User())->delete($id);
        if ($users) {
            redirect('projeto');
        }
    }
}
