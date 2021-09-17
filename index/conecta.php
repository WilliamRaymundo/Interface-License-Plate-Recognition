<?php
    header('Content-Type: application/json');

    
    $_fk_local = $_POST['fk_local'];
    $_entrada = $_POST['fk_local'];
    $_saida = $_POST['saida'];
    $_capPlaca = $_POST['capPlaca'];
    $_Permi = $_POST['Permi'];
    $_captura = $_POST['captura'];

    $pdo = new PDO('mysql:host=localhost; dbname=licence;', 'root', '');
    echo $_fk_local;

    $stmt = $pdo->prepare('INSERT INTO historico (fk_local, Entrada, Saida, capPlaca, Permi, captura) VALUES (:na, :co, :ca, :aa, :ao, :ba)');
    $stmt->bindValue(':na', $_fk_local);
    $stmt->bindValue(':co', $_entrada);
    $stmt->bindValue(':ca', $_saida);
    $stmt->bindValue(':aa', $_capPlaca);
    $stmt->bindValue(':ao', $_Permi);
    $stmt->bindValue(':ba', $_captura);
    $stmt->execute();

  
?>
    