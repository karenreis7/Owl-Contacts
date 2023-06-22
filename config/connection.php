<?php

    $dsn = "mysql:host=localhost; dbname=owl";
    $user = "root";
    $pass = "root";

try {
    $conn = new PDO( $dsn, $user, $pass);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    $error = $e ->getMessage();
    echo "Erro: $error";
}
