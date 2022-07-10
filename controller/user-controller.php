<?php
    include('../models/User-Class.php');

    $users = new Users;
    $users->setName($_POST['name']);
    $users->setEmail($_POST['email']);
    $users->setPassword($_POST['password']);
    $users->setPhone($_POST['phone']);

    $users->valitationFields();
?>