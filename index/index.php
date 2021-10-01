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
  <link rel="icon" href="img/logo.png">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">


  </head>
  <body>
    <!--
  <form id="forma1">
      
      <div class="input-field col s12">
          <input type="text" name="nomeCat" id="nomeCat">
          <label for="nomeCat">Nome tipo</label>
      </div>


      <div class="input-field col s12">
          <input type="number" min="1" max="99" name="nPermi" id="nPermi">
          <label for="nPermi">Permissão</label>
      
      </div>

      
      <input type="submit" form="forma1" class="btn" value="Enviar"/>
  </form>
-->

  <ul>
    <li><img src="img/logo.png" alt=""></li>
    <li><a href="#" id="historico"><span class="material-icons"><p class="icon">list</p></span></a></li>
    <li><a href="#" id="usuarios"><span class="material-icons"><p class="icon"> face</p></span></a></li>
    <li><a href="#"id="veiculos"><span class="material-icons"><p class="icon">dashboard</p></span></a></li>

  </ul>
  <div id="formulario">
  <button class="waves-effect waves-teal btn-flat" ><i class="material-icons" onclick="fecharPagUsu()">close</i></button>
  <div class="row">
    
    <div class="col s12 m10 push-m1">
      <h3 class="light" onclick="myFunction()">Novo Tipo Usuário</h3>

    <form id='forma1'>
      
        <div class="input-field col s12">
            <input type="text" name="nomeCat" id='nomeCat'>
            <label for="nomeCat">Nome tipo</label>
        </div>


        <div class="input-field col s12">
            <input type="number" min="1" max="99" name="nPermi" id='nPermi'>
            <label for="nPermi">Permissão</label>
        
        </div>

        
        <input type="submit" form='forma1' class="btn" value="Enviar"/>
    </form>
    </div>
    </div>
</div>
<div id="menu">
<h3>Histórico</h3>



  <section class="content">
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
  <script src="js/create.js"></script>

  </body>
</html>
