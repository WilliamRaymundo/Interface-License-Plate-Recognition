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
$query = "SELECT * FROM historico WHERE id = $id"; 
$result_query = mysqli_query($conexao, $query ) or die(' Erro na query:' );

?>
<html>
    <body>
    <button class="waves-effect waves-teal btn-flat" ><i class="material-icons" onclick="fecharPagUsu()">close</i></button>
    <h3>Detalhes Histórico</h3>
    <?php $row = mysqli_fetch_array( $result_query ) ?>
    <div class="con-nit">
      <table><tr>
      <tr> <td>Entrada</td> <td><?php print $row['Entrada']; ?></td></tr>
      <tr> <td> Saída</td> <td> <?php print $row['Saida']; ?></td></tr>
      <tr> <td> Placa </td> <td><?php print $row['capPlaca']; ?></td></tr>
      <tr> <td> Permissão </td> <td><?php print $row['Permi']; ?></td></tr>
      <tr> <td> Captura </td> <td><img src="<?php print $row['captura']; ?>"></td></tr>
      
      </table>
    </div>
    </body>
</html>