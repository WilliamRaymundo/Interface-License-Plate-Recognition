<?php
    header('Content-Type: application/json');

    $_nomeCat = $_POST['nomeCat'];
    $_nPermi = $_POST['nPermi'];
    $pdo = new PDO('mysql:host=localhost; dbname=licence;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO tipousuario (nomeCat, nivelPermi) VALUES (:na, :co)');
    $stmt -> bindValue(':na', $_nomeCat );
    $stmt -> bindValue(':co', $_nPermi );
    $stmt->execute();

  
?>