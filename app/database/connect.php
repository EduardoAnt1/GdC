<?php

function connect(){
    return new PDO("mysql:host=localhost;dbname=php_pro",'root','@Mulaimunda1',[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
}