<?php

//carrega os valores do formulário nos respectivos campos
$nome = $_POST['nomeCliente'];
$rua = $_POST['ruaCliente'];
$cidade = $_POST['cidadeCliente'];

//criar conexão com a base de dados
$hostname="localhost";
$dbname = "banco";
$username="root";
$password = "";

$strconn = new mysqli($hostname, $username, $password, $dbname) ;

//check connection
if ($strconn->connect_error) {
  die("Connection failed: " . $strconn->connect_error);
}
echo "Connected successfully to Bank Database </br></br>";


//armazenamento dos dados na BD mysql

$sql = "INSERT INTO  customer VALUES ('$nome','$rua' ,'$cidade ')";
mysqli_query($strconn,$sql) or die("Erro ao tentar cadastrar cliente");
mysqli_close($strconn);
echo "Cliente Cadastrado com Sucesso;</br></br>";
echo "Cliente: $nome;  Rua: $rua;  Cidade: $cidade; </br></br " ;


#link para voltar --> 
echo "<a href='http://localhost/bankingsite/cadastros.html' > Voltar á Página Anterior </a>";


?>
