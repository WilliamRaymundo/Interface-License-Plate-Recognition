 
<?php
include('conecta.php'); 
$campo="%{$_POST['placa']}%";

 

     $consulta = "SELECT * FROM veiculo WHERE placa LIKE '$campo%'";//seleciona o ultimo id registrado 
    $consu = $mysqli->query($consulta); //faz a consulta de der errado ele mostra o erro

    //$consulte = "SELECT * FROM imagem WHERE id_produto LIKE '$campo%'";//seleciona o ultimo id registrado 
    //$con = $mysqli->query($consulte); //armazena a consulta



    while ($row_usuario = mysqli_fetch_assoc($consu)){
      $busc =$row_usuario['id'];

      $fk = $row_usuario['fk_usuario'];

      $consulte = "SELECT * FROM usuario WHERE id LIKE '$fk'";//seleciona o ultimo id registrado 
      $con = $mysqli->query($consulte); //armazena a consulta
      $dado = $con->fetch_array();


    //   echo'<img src="'.$dado['id'].'" width="100px" height="100px"></a>';
     //  echo'<img src="'.$dado['fk_usuario'].'" width="100px" height="100px"></a><br>';
       echo "veiculo: ".$row_usuario['id']."<br>";
       echo "veiculo: ".$row_usuario['fk_usuario']."<br>";
       echo "veiculo: ".$row_usuario['placa']."<br>";
       echo "veiculo: ".$row_usuario['cor']."<br>";

       echo "usuario: ".$dado['id']."<br>";
       echo "usuario: ".$dado['CPF']."<br>";
       echo "usuario: ".$dado['Nome']."<br>";
       echo "usuario: ".$dado['nPermi']."<br>";


 
    }

?>

