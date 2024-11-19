<?php
$server = "localhost";
$username = "root";
$password = "root";
$db = "Conectum";

$conn = mysqli_connect($server, $username, $password, $db);

if(!$conn) {
  fail!("Conection Failed!". mysql_connect_error());
?>
