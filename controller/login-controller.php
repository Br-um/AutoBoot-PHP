<?php
    session_start();
    require('../models/mysqlcon.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $selLog = "SELECT email, nome FROM usuario WHERE email= '$email' AND senha = '$password'";
    $query = mysqli_query($conn, $selLog);
    $result = mysqli_fetch_assoc($query);
    $total = mysqli_num_rows($query);
    if($total != 1):
        echo "<br><br>Email ou senha inválido";
    else:
        $_SESSION['usuario'] = serialize($result);
        header('Location: ../index.php');
    endif;
?>