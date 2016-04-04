<?php
//dados conexao
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "webapp";

$conn = mysql_connect($server, $user, $pass);
$db = mysql_select_db($dbname, $conn);
?>
