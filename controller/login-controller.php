<?php
    session_start();
    require('../models/mysqlcon.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $selLog = "SELECT email FROM usuario WHERE email= '$email'";
    $query = mysqli_query($conn, $selLog);
    if(!$query):
        echo "Eli_query($conn, $sqlQuery)rro ao efetuar login";
    else:
        if(!isset($_SESSION["$email"])){
            header('Location: ../index.php');
        }else{
            echo "Erro ao armazenar sessão";
        }
    endif;
?>
