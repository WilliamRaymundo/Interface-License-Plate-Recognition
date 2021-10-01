<?php
    header('Content-Type: application/json');

    $_nomeCat = $_POST['name'];
    $_nPermi = $_POST['comment'];
    $pdo = new PDO('mysql:host=localhost; dbname=licence;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO tipousuario (nomeCat, nivelPermi) VALUES (:na, :co)');
    $stmt -> bindValue(':na', $_nomeCat );
    $stmt -> bindValue(':co', $_nPermi );
    $stmt->execute();

    
    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário Salvo com Sucesso');
    } else {
        echo json_encode('Falha ao salvar comentário');
    }

  
?>