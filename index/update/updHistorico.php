<?php
$id = $_GET['id'];
$user = "root"; 
$password = ""; 
$database = "licence"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 
$conexao = mysqli_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 
mysqli_select_db($conexao, $database);
$query = "UPDATE historico SET permi = 1 WHERE id = $id";
$result_query = mysqli_query($conexao, $query ) or die(' Erro na query:' );


?>