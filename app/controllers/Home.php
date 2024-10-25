<?php

namespace app\controllers;

class Home{
    public function index($params){
        $users = all('usuario');
        return [
            'view' => 'login.php',
            'data' => ['title'=>'Login', 'users' => $users]
        ];
    }
}