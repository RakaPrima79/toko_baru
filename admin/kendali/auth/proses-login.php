<?php

$email = $_POST['email'];
$pass = $_POST['password'];

require '../klass.php';
$baru = new Database();
$baru->login($email, $pass);


?>