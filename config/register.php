<?php
require_once "koneksi.php";
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
// echo $id_register;
$q = $database_connection ->prepare("INSERT INTO `data_pendaftar` (`id`, `email`, `username`, `password`) VALUES (NULL, ?, ?, SHA1(?));");
$q->execute([$email, $username, $password]);
header("location: ../login.php");
?>