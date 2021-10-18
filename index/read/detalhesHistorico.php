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
$row = mysqli_fetch_array( $result_query );

$fk = $row['fk_local'];
$queryfk = "SELECT * FROM local WHERE id = $fk"; 
$result_queryfk = mysqli_query($conexao, $queryfk) or die(' Erro na query:' );
$rowfk = mysqli_fetch_array( $result_queryfk );
?>
<html>
    <body>
    <button class="waves-effect waves-teal btn-flat" ><i class="material-icons" onclick="fecharPagUsu()">close</i></button>
    <h3>Detalhes Histórico</h3>
   
    <div class="con-nit">
      <table><tr>
      <tr> <td>Entrada</td> <td><?php print $row['entrada']; ?></td></tr>
      <tr> <td> Saída</td> <td> <?php print $row['saida']; ?></td></tr>
      <tr> <td> Placa </td> <td><?php print $row['capPlaca']; ?></td></tr>
      <tr> <td> Permissão </td> <td><?php print $row['permi']; ?></td></tr>
      <tr> <td> Captura </td> <td><img src="<?php print $row['captura']; ?>"></td></tr>
      <tr> <td> Endereço Local </td> <td><?php print $rowfk['endereco']; ?></td></tr>
      <tr> <td> CEP </td> <td><?php print $rowfk['cep']; ?></td></tr>
     
      
      </table>
    </div>
    </body>
</html>