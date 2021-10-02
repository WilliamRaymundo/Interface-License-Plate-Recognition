
function myFunction(){
    alert('OláSSS');
}


$('#forma1').submit(function(e){
    e.preventDefault();
    alert("foi");

    var u_button = $('#button-sub').attr('name');
    alert(u_button);

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
            var u_CPF = $('#CPF').val();
            var u_nome = $('#nome').val();
            var u_senha = $('#senha').val();
            var u_nivel = $('#fk_nivel').val();
            $.ajax({
                url: 'insert/insertBD.php',
                method: 'POST',
                data: {name: u_name, comment:u_comment},
                dataType: 'json'
            }).done(function(result){
                $('#nomeCat').val('');
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