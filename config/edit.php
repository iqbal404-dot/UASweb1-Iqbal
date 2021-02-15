<?php
require_once "koneksi.php";
$id_register = $_POST["id_reg"];
$username = $_POST["username"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];

// echo $id_register;
$q = $database_connection ->prepare("UPDATE `data_pendaftar` SET `username`= ?, `email` = ? WHERE `data_pendaftar`.`id` = ?;");
$q->execute([$username, $email, $id_register]);
header("location: ../halamanutama.php");
?>