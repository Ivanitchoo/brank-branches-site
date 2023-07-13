<?php

//carrega os valores do formulário nos respectivos campos
$id = $_POST['ID_conta'];
$titular = $_POST['titular_conta'];
$agencia= $_POST['agencia_conta'];
$saldo = $_POST['saldo_conta'];

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



//armazenamento dos dados na BD mysql

$sql = "INSERT INTO  account VALUES ('$id','$agencia' ,'$saldo ')";

mysqli_query($strconn,$sql) or die("Erro ao tentar criar conta");
mysqli_close($strconn);
?>
	
<html>
		<head>
			<title> Confirmation </title>
			
		<head>

		<body>
			<div style="text-align:center">
				<p> Conta criada com Sucesso </p> </br
				<p>Account ID: <?php echo $id ;?> <p><br>
				<p>Depositor: <?php echo $titular; ?> <p><br> 
				<p>Branch: <?php echo $agencia; ?> <p> </br></br 
			</div>
		</body>

</html>



<?php
#link para voltar --> 
echo "<a href='http://localhost/bankingsite/cadastrarConta.html' > Voltar a Pagina Anterior </a>";

?>
