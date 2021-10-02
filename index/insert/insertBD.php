<?php
    header('Content-Type: application/json');

    $_button = $_POST['button'];

    $pdo = new PDO('mysql:host=localhost; dbname=licence;', 'root', '');


    switch ($_button) {
        case "tipoUsuario":
            $_nomeCat = $_POST['nomeCat'];
            $_nPermi = $_POST['nPermi'];
            $stmt = $pdo->prepare('INSERT INTO tipousuario (nomeCat, nivelPermi) VALUES (:na, :co)');
            $stmt -> bindValue(':na', $_nomeCat );
            $stmt -> bindValue(':co', $_nPermi );
            $stmt->execute();

            
            if ($stmt->rowCount() >= 1) {
                echo json_encode('Comentário Salvo com Sucesso');
            } else {
                echo json_encode('Falha ao salvar comentário');
            }
            break;


        case "Usuario":
            $_CPF = $_POST['CPF'];
            $_nome = $_POST['nome'];
            $_senha = $_POST['senha'];
            $_nivel = $_POST['nivel'];
            $stmt = $pdo->prepare('INSERT INTO usuario (fk_tipoUsuario, CPF, Nome, Senha) VALUES (:na, :co, :ab, :az)');
            $stmt -> bindValue(':na', $_nivel );
            $stmt -> bindValue(':co', $_CPF );
            $stmt -> bindValue(':ab', $_nome );
            $stmt -> bindValue(':az', $_senha );
            $stmt->execute();

            
            if ($stmt->rowCount() >= 1) {
                echo json_encode('Comentário Salvo com Sucesso');
            } else {
                echo json_encode('Falha ao salvar comentário');
            }
            break;
        case 2:
            echo "i equals 2";
            break;
    }



  
?>