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
  <button class="waves-effect waves-teal btn-flat" ><i class="material-icons" onclick="fecharPagUsu()">close</i></button>
  <div class="row">
    
    <div class="col s12 m10 push-m1">
      <h3 class="light">Novo Usuário</h3>
    <form>
      
        <div class="input-field col s12">
            <input type="text" name="CPF" id="CPF">
            <label for="CPF">CPF</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="nome" id="nome">
            <label for="nome">Nome</label>
        
        </div>

        <div class="input-field col s12">
            <input type="text" name="senha" id="senha">
            <label for="senha">Senha</label>
        </div>

        <label>Browser Select</label>
  <select class="browser-default">
    
    <option value="" disabled selected>Choose your option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>

  

        <button type="submit" class="btn">Cadastrar</button>
    </form>
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