
<?php

    require 'consultaDB.php';
    $sql = "SELECT * FROM customer ";
    $client_query = mysqli_query($strconn,$sql);
?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Proj - Ivan Mangunyane I32</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="consultas_styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" >
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>


    <div class="containerConsultas">
    <!--def do Menu-->
        <div class="mySideNav" id="sideNav">

            <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">
                &times;
            </a>

            <a href="#" onclick="about();">About</a>
            <a href="#">Consulta de Clientes</a>
            <a href="http://localhost/bankingsite/cadastros.html">Cadastro de Clientes</a>
            <a href="http://localhost/bankingsite/cadastrarConta.html">Cadastros de Conta</a>
            <a href="http://localhost/bankingsite/consultaConta.html">Consulta de Conta</a>
            <a href="#">Contactos</a>


        </div>


        <span style="font-size:30px; cursor:pointer" onclick="openNav()">

            &#9776;Menu

        </span>

        <!--Corpo da página-->
        <section id="consultaBlock" class="consultaBlock">

            <h1 style="text-align:center"> Consulta de Clientes</h1><hr /><br /><br />




            <div class="search-container">
                
                <form method="post" action="">
                        <input type="text" placeholder="Search Client.." name="search" >
                        <input name="sendSearch" type="submit" value="search"></input>
                </form>

            <br /><br />

            <!--Lógica de pesquisa-->
            
                <br>    
                <div class="row">
                    <div class="table-responsive">
                         <table  class="table">

                                <thead > 
                                         <tr> 
                                            <th scope="col" style="text_align:center" >Nome</th> 
                                            <th scope="col" style="text_align:center">Rua</th> 
                                            <th scope="col" style="text_align:center">Cidade</th>
                                        </tr> 
                                </thead>

                

                                <tbody>
                                                    
                                          <?php
                                      
                                             $sendClientSearch = filter_input(INPUT_POST, 'sendSearch', FILTER_SANITIZE_STRING);

                                            if($sendClientSearch){
                                                $nome = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
                                                $sql = "SELECT * FROM customer WHERE customer_name LIKE '%$nome%' ";
                                                $client_query = mysqli_query($strconn,$sql);

                                                while($row_customer = mysqli_fetch_assoc($client_query)){ ?>

                                                    <tr>
                                                    
                                                        <td scope="row"> <?php echo $row_customer['customer_name']; ?> <td/>
                                                        <td> <?php echo $row_customer['customer_street']; ?> <td/>
                                                        <td> <?php echo $row_customer['customer_city']; ?> <td/>
                                                    

                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                
                                <tbody/>

                          <table/>
                    </div>
                </div>

            </div><br /><br /><br /><br />


         


        </section>


    </div>


    <script>
        function openNav() {
            document.getElementById("sideNav").style.width = "250px";
            document.getElementById("consultaBlock").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";


        }

        function closeNav() {
            document.getElementById("sideNav").style.width = "0";
            document.getElementById("consultaBlock").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }


    </script>

</body>
</html>