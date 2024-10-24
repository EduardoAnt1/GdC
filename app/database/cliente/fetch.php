<?php

function clientfindByUser($field,$value,$fields = '*'){
    try{
        $connect = connect();
        $prepare = $connect->prepare("SELECT {$fields} FROM cliente WHERE $field = :{$field}");
        $prepare->execute([
            $field =>$value
        ]);
        return $prepare->fetchAll();
    }catch(PDOException $e){
        var_dump($e->getMessage());
    }
}

?>