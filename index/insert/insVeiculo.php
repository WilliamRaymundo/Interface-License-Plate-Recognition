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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
</head>

<body>
  <button class="waves-effect waves-teal btn-flat" type="button" ><i class="material-icons" onclick="fecharPagUsu()">close</i></button>
  <div class="row">
    
    <div class="col s12 m10 push-m1">
      <h3 class="light">Novo Veículo</h3>
    
      
        <div class="input-field col s12">
            <input type="text" name="Placa" id="Placa">
            <label for="Placa">Placa</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="Permi" id="Permi">
            <label for="Permi">Permi</label>
        
        </div>

        <label>Tipo Usuário</label>
  <select class="browser-default" id="fk_nivel">
  <?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query )) 
{ 
  ?><option value="<?php print $row['id']; ?>">  <?php print $row['nomeCat']; ?> </option> <?php
}

?>
 </select>
 <br>
        <input type="submit" form='forma1' id='button-sub' class="btn" value="Enviar" name='Usuario'/>
  
    </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="js/main.js"></script>
  <script src="js/materialize.js"></script>
   
</body>



</htmL>