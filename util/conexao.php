<?php
$conect = mysql_connect("localhost", "root", "");

if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

$db = mysql_select_db("pagina_de_noticias");
?>