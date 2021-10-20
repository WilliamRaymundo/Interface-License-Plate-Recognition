
function myFunction(){
    alert('OláSSS');
     $(document).ready(function() {
            $('#estadoa').select2();
        });
}


$('#forma1').submit(function(e){
    e.preventDefault();
    alert("foi");

    var u_button = $('#button-sub').attr('name');
    

    switch (u_button) {
        case "tipoUsuario":
            var u_nomeCat = $('#nomeCat').val();
            var u_nPermi = $('#nPermi').val();
            $.ajax({
                url: 'insert/insertBD.php',
                method: 'POST',
                data: {nomeCat: u_nomeCat, nPermi:u_nPermi, button:u_button},
                dataType: 'json'
            }).done(function(result){
                $('#nomeCat').val('');
                $('#nPermi').val('');
                console.log(result);
                /*getComments();*/
            });
            break;

        case "Usuario":
            alert(u_button);
            var u_CPF = $('#CPF').val();
            var u_nome = $('#nome').val();
            var u_senha = $('#senha').val();
            var u_nivel = $('#fk_nivel').val();
            alert(u_nivel);
            $.ajax({
                url: 'insert/insertBD.php',
                method: 'POST',
                data: {CPF: u_CPF, nome:u_nome, senha:u_senha, nivel:u_nivel, button:u_button},
                dataType: 'json'
            }).done(function(result){
                $('#CPF').val('');
                $('#nome').val('');
                $('#senha').val('');
                console.log(result);
                /*getComments();*/
            });
            break;
            case "tipoVeiculo":
                var u_Especie = $('#Especie').val();
                var u_Cor = $('#Cor').val();
                var u_nPermi = $('#nPermi').val();
                $.ajax({
                    url: 'insert/insertBD.php',
                    method: 'POST',
                    data: {Especie: u_Especie, Cor: u_Cor, nPermi:u_nPermi, button:u_button},
                    dataType: 'json'
                }).done(function(result){
                    $('#Especie').val('');
                    $('#Cor').val('');
                    $('#nPermi').val('');
                    console.log(result);
                    /*getComments();*/
                });
                break;
                case "Veiculo":
                    var u_associa = $('#estadoa').val();
                    var u_Placa = $('#Placa').val();
                    var u_Permi = $('#Permi').val();
                    var u_Esp = $('#especie').val();
                    
                    $.ajax({
                        url: 'insert/insertBD.php',
                        method: 'POST',
                        data: {associa: u_associa, Placa: u_Placa, Permi:u_Permi, especie: u_Esp ,button:u_button},
                        dataType: 'json'
                    }).done(function(result){
                        $('#Especie').val('');
                        $('#Cor').val('');
                        $('#nPermi').val('');
                        console.log(result);
                        /*getComments();*/
                    });
                    break;    
        

        case "Julho":
            console.log("Inverno!");
            break;
        case "Outubro":
            console.log("Primavera!");
    }
});