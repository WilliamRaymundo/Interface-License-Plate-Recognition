<?php
$user = "root"; 
$password = ""; 
$database = "licence"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 

# Conecta com o servidor de banco de dados 
$conexao = mysqli_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 
mysqli_select_db($conexao, $database);
$query = "SELECT * FROM tipousuario"; 
$result_query = mysqli_query($conexao, $query ) or die(' Erro na query:' );
?>
<html>
  <head>
  <title>Interface-License-Plate-Recognition</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">


  </head>
  <body>

  <ul>
    <li><img src="img/logo.png" alt=""></li>
    <li><a href="#" id="historico"><span class="material-icons"><p class="icon">list</p></span></a></li>
    <li><a href="#" id="usuarios"><span class="material-icons"><p class="icon"> face</p></span></a></li>
    <li><a href="#"id="veiculos"><span class="material-icons"><p class="icon">dashboard</p></span></a></li>

  </ul>
  <div id="formulario">
</div>
<div id="menu">
<h3>Histórico</h3>



  <section class="content">

  
  <label>Browser Select</label>
  <select class="browser-default">
  <?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query )) 
{ 
  ?><option value="1">   <?php print $row['nomeCat']; ?> </option> <?php
}

?>
 </select>
    


  
        <table class="striped">
          <thead>
            <tr>
              <th>Entrada</th>
              <th>Saida</th>
              <th>Placa</th>
              <th>Permissão</th>
              <th>Ação</th>
            </tr>
          <thead>
            <tbody class="box_resu">
              
        <tbody>
      </table>
</section>
</div>





      <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="js/main.js"></script>
  <script src="js/materialize.js"></script>

  </body>
</html>