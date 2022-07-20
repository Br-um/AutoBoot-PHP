<?php
    session_start();
    require('../models/mysqlcon.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $selLog = "SELECT email, nome FROM usuario WHERE email= '$email'";
    $query = mysqli_query($conn, $selLog);
    $total = mysqli_num_rows($query);
    if(!$total):
        echo "<br><br>Email ou senha inválido";
    else:
        if(!isset($_SESSION["$email"])){
            $row = mysqli_fetch_assoc($query);
            $info = $row['nome'];
            header('Location: ../index.php?user='.$info);
        }else{
            echo "Erro ao armazenar sessão";
        }
    endif;
?>
