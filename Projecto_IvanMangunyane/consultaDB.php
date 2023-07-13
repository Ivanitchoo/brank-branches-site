<?php

//criar conexão com a base de dados
$hostname="localhost";
$dbname = "banco";
$username="root";
$password = "";

$strconn = new mysqli($hostname, $username, $password, $dbname) ;

if ($strconn->connect_error) {
  die("Connection failed: " . $strconn->connect_error);
}

?>