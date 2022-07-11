<?php

    $conn = mysqli_connect("localhost:3307", "root", "", "autoboot");

    if(!$conn){
        echo "Erro ao conectar no banco de dados";
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        echo "Sucesso ao conectar no banco";
    }
?>