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


        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }



  
?>