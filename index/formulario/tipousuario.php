<?php

?>
<html>

<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
</head>

<body>
  <button class="waves-effect waves-teal btn-flat" ><i class="material-icons" onclick="fecharPagUsu()">close</i></button>
  <div class="row">
    
    <div class="col s12 m10 push-m1">
      <h3 class="light">Novo Tipo Usuário</h3>
    <form>
      
        <div class="input-field col s12">
            <input type="text" name="nomeCat" id="CPF">
            <label for="nomeCat">Nome tipo</label>
        </div>


        <div class="input-field col s12">
            <input type="number" min="1" max="99" name="nome" id="nome">
            <label for="nome">Permissão</label>
        
        </div>

        
        <button type="submit" class="btn">Cadastrar</button>
    </form>
    </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="js/main.js"></script>
  <script src="js/materialize.js"></script>
   
</body>



</htmL>