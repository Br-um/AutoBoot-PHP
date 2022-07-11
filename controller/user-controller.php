<?php
include('../models/User-Class.php');

$users = new Users;
$users->setName($_POST['name']);
$users->setEmail($_POST['email']);
$users->setPassword($_POST['password']);
$users->setPhone($_POST['phone']);

//  Validação
// DB
if($users->valitationFields()):
$nome = $users->getName();
$email = $users->getEmail();
$phone = $users->getPhone();
$password = $users->getPassword();
$sqlUser = "INSERT INTO usuario (nome, email, telefone, senha) VALUES ('$nome', '$email', '$phone', '$password')";
$sqlQuery = mysqli_query($conn, $sqlUser);
header('Location: ../index.php');
else:
    echo "<br><br>erro";
endif;
?>
