<?php
$id = $_GET['id'];
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
    <body>
        <?php
        echo $id; 
        ?>
    <h3>Detalhes Histórico</h3>
    <label>Tipo Usuário</label>
  <select class="browser-default">
  <?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query )) 
{ 
  ?><option value="<?php print $row['nivelPermi']; ?>">  <?php print $row['nomeCat']; ?> </option> <?php
}

?>
 </select>
    </body>
</html>