<?php
    session_start();
    require('../models/mysqlcon.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $selLog = "SELECT email, nome FROM usuario WHERE email= '$email' AND senha = '$password'";
    $query = mysqli_query($conn, $selLog);
    $result = mysqli_fetch_assoc($query);
    $total = mysqli_num_rows($query);

    $err = "Email ou Senha errados";
    if($total != 1):
        header('Location: ../views/loginpage.php?err='.$err);
    else:
        $_SESSION['usuario'] = serialize($result);
        header('Location: ../index.php');
    endif;
?>