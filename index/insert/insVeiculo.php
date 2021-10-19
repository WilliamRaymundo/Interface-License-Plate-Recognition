<?php
$user = "root"; 
$password = ""; 
$database = "licence"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 

# Conecta com o servidor de banco de dados 
$conexao = mysqli_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 
mysqli_select_db($conexao, $database);
$query = "SELECT * FROM usuario"; 
$result_query = mysqli_query($conexao, $query ) or die(' Erro na query:' );
$queryi = "SELECT * FROM tipoVeiculo"; 
$result_queryi = mysqli_query($conexao, $queryi ) or die(' Erro na query:' );
?>
<html>

<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body>
  <button class="waves-effect waves-teal btn-flat" type="button" ><i class="material-icons" onclick="fecharPagUsu()">close</i></button>
  <div class="row">
    
    <div class="col s12 m10 push-m1">
      <h3 class="light"  onclick="myFunction()">Novo Veículo</h3>
      <div id="aassociar">
      <select class="js-example-basic-single js-states form-control" id="estadoa">
      <option>--</option>
  <?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query )) 
{ 
  ?><option value="<?php print $row['id']; ?>">  <?php print $row['Nome']; ?> </option> <?php
}

?>
 </select> 
</div>
      
        <!--
      <div class="input-field col s12">
            <input type="text" name="Associar" id="Associar">
            <label for="Associar">Nome Usuário</label>
        </div> -->
      <input type="button" onclick="alterar()"  id='button-sub-asso' class="btn" value="Associar Usuario" name='Usuario'/>
      <a id="button-sub-ex-asso" href="#" class="btn-floating red"><i class="material-icons">close</i></a>
       
      
  
      
        <div class="input-field col s12">
            <input type="text" name="Placa" id="Placa">
            <label for="Placa">Placa</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="Permi" id="Permi">
            <label for="Permi">Permi</label>
        
        </div>
  <!--
      <label>Tipo Usuário</label>
        <select class="browser-default" id="estadoa">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>

    </select>
-->
<select class="js-example-basic-single js-states form-control" >
<?php

# Exibe os registros na tela 
while ($roww = mysqli_fetch_array( $result_queryi )) 
{ 
  ?><option value="<?php print $roww['id']; ?>">  <?php print $roww['especie']; ?> </option> <?php
}

?>
</select>
 <br>
        <input type="submit" form='forma1' id='button-sub' class="btn" value="Enviar" name='Usuario'/>
  
    </div>
    </div>

    

    <script src="js/main.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/create.js"></script>
  

   
</body>
<script>
  $(document).ready(function() {
            $('#estadoa').select2();
        });
}
</script>


</htmL>