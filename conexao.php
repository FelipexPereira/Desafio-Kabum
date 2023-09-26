<?php
//Conexão com o banco de dados
try {
    $conn =  new PDO("mysql:dbname=kabum;host=127.0.0.1", "root", "",
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
} catch (\Throwable $th) {
    die($th->getMessage());
}

?>