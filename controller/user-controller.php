<?php
include('../models/User-Class.php');

$users = new Users;
$users->setName($_POST['name']);
$users->setEmail($_POST['email']);
$users->setPassword($_POST['password']);
$users->setPhone($_POST['phone']);
//  Validação
// DB
if (!$users->valitationFields()) :
    echo "<br><br>erro";
else :
    $nome = $users->getName();
    $email = $users->getEmail();
    $phone = $users->getPhone();
    $password = $users->getPassword();
    $sqlUser = "INSERT INTO usuario (nome, email, telefone, senha) VALUES ('$nome', '$email', '$phone', '$password')";
    $sqlConfirm = "SELECT email FROM usuario WHERE email = '$email'";
    $queyConfirm = mysqli_query($conn, $sqlConfirm);
    $sqlrows = mysqli_num_rows($queyConfirm);
    $err = "Email ja existente";
    if ($sqlrows > 0) {
        header('Location: ../views/registerpage.php?err='.$err);
    }else{
        mysqli_query($conn, $sqlUser);
        header('Location: ../index.php');
    }
endif;
