<?php
    header('Content-Type: application/json');

    $_button = $_POST['button'];

    $pdo = new PDO('mysql:host=localhost; dbname=licence;', 'root', '');


    switch ($_button) {
        case "tipoUsuario":
            $_nomeCat = $_POST['nomeCat'];
            $_nPermi = $_POST['nPermi'];
            $stmt = $pdo->prepare('INSERT INTO tipousuario (nomeUser, nivelPermi) VALUES (:na, :co)');
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
            $stmt = $pdo->prepare('INSERT INTO usuario (fk_tipoUser, CPF, Nome, Senha) VALUES (:na, :co, :ab, :az)');
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
            case "tipoVeiculo":
                $_Especie = $_POST['Especie'];
                $_Cor = $_POST['Cor'];
                $_nPermi = $_POST['nPermi'];
                $stmt = $pdo->prepare('INSERT INTO tipoveiculo (especie, cor, permissao) VALUES (:na, :co, :sa)');
                $stmt -> bindValue(':na', $_Especie );
                $stmt -> bindValue(':co', $_Cor);
                $stmt -> bindValue(':sa', $_Cor);
                $stmt->execute();
    
                
                if ($stmt->rowCount() >= 1) {
                    echo json_encode('Comentário Salvo com Sucesso');
                } else {
                    echo json_encode('Falha ao salvar comentário');
                }
                break;
                case "Veiculo":
                $_associa = $_POST['associa'];
                $_Placa = $_POST['Placa'];
                $_Permi = $_POST['Permi'];
                $_Especie = $_POST['especie'];
                
                $stmt = $pdo->prepare('INSERT INTO veiculo (fk_usuario, fk_tipoVeiculo, placa, permi) VALUES (:na, :co, :sa, :ss)');
                $stmt -> bindValue(':na', $_associa );
                $stmt -> bindValue(':co', $_Especie);
                $stmt -> bindValue(':sa', $_Placa);
                $stmt -> bindValue(':ss', $_Permi);
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