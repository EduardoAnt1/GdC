<?php

require 'bootstrap.php';

try{
    $data = router();

    if(!isset($data['data'])){
        throw new Exception('o indice data está faltando');
    }

    if(!isset($data['data']['title'])){
        throw new Exception('o indice title está faltando');
    }

    if(!isset($data['view'])){
        throw new Exception('Página não encontrada');
    }

    if(!file_exists(VIEWS.$data['view'])){
        throw new Exception("Essa view {$data['view']} não existe.");    

    }

    extract($data['data']);

    $view = $data['view'];
    require VIEWS.'master.php';

}catch(Exception $e){
    var_dump($e -> getMessage());
}

