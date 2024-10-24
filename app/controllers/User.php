<?php

namespace app\controllers;

class User{
    public function show($params){
        if(!isset($params['user'])){
            return header('Location :  /');
            return redirect('/');
        }
        $clientes = clientfindByUser('idVendedor',$params['user']);
        return [
            'view' => 'user.php',
            'data' => ['title'=>'Vendedor', 'clientes' => $clientes]
        ];
    }
}