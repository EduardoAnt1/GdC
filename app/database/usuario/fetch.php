<?php

function userfindBy($field,$value,$fields = '*'){
    try{
        $connect = connect();
        $prepare = $connect->prepare("SELECT {$fields} FROM usuario WHERE {$field} = :{$field}");
        $prepare->execute([
            $field =>$value
        ]);
        return $prepare->fetch();
    }catch(PDOException $e){
        var_dump($e->getMessage());
    }
}

?>