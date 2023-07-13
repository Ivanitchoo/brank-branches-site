<?php

    require 'consultaDB.php';
 
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Proj - Ivan Mangunyane I32</title>

    <link rel="stylesheet" href="consultaConta.css" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <div class="containerConsultaConta">

        <div class="mySideNav" id="sideNav">

            <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">
                &times;
            </a>

            <a href="#">About</a>
            <a href="http://localhost/bankingsite/consultas.php">Consulta de Clientes</a>
            <a href="http://localhost/bankingsite/cadastros.html">Cadastro de Clientes</a>
            <a href="http://localhost/bankingsite/cadastrarConta.html">Cadastros de Conta</a>
            <a href="#">Consulta de Conta</a>
            <a href="#">Contactos</a>


        </div>


        <span style="font-size:30px; cursor:pointer" onclick="openNav()">

            &#9776;Menu

        </span>

        <section id="consultaContaBlock" class="consultaContaBlock">

            <h1 style="text-align:center"> Consulta de Contas </h1><hr /><br /><br />


            

            <div class="search-container">
                
            
                <form action="" method="post">
                    <input type="text" placeholder="Search ID.." name="search">
                    <input name="sendSearch" type="submit" value="search"></input>
                </form><br><br><br>
                
            
                    
                <table  class="table">

                       <thead > 
                                <tr> 
                                   <th style="text_align:center">ID</th> 
                                   <th style="text_align:center">Branch Name</th> 
                                   <th style="text_align:center">Balance</th>
                               </tr> 
                       </thead>

                

                       <tbody>
                                       
                                 <?php
                         
                                    $sendContaSearch = filter_input(INPUT_POST, 'sendSearch', FILTER_SANITIZE_STRING);

                                   if($sendContaSearch){
                                       $id = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
                                       $sql = "SELECT * FROM account WHERE account_number LIKE '%$id%' ";
                                       $account_query = mysqli_query($strconn,$sql);

                                       while($row_account = mysqli_fetch_assoc($account_query)){ ?>

                                           <tr>
                                       
                                               <td  style="text_align:center"> <?php echo $row_account['account_number'] ?> <td/>
                                               <td  style="text_align:center"> <?php echo $row_account['branch_name'] ?> <td/>
                                               <td  style="text_align:center"> <?php echo $row_account['balance'] ?> <td/>
                                       

                                           </tr>
                                       <?php } ?>
                                   <?php } ?>
                   
                       <tbody/>
                <table/>
            </div>
        </section>


    </div>


    <script>
        function openNav() {
            document.getElementById("sideNav").style.width = "250px";
            document.getElementById("cadastroBlock").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("sideNav").style.width = "0";
            document.getElementById("cadastroBlock").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>



</body>
</html>