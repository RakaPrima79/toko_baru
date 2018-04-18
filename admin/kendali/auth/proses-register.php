<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['password'];
$foto="";






require '../klass.php';
$baru = new Database();
$baru->register($nama,$foto,$email,$pass);


?>