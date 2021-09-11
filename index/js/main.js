function getVeiculos() {
    $.ajax({
        url: 'processa.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        $('.box_resu').empty();
        for (var i = 0; i < result.length; i++) {

            $('.box_resu').prepend('<tr><td>' + result[i].entrada + '</td><td>' + result[i].saida + '</td><td>' + result[i].placa + '</td><td>' + result[i].permi + '</td></tr>');
        }
    });
    setTimeout(getVeiculos, 10000);
}
getVeiculos();

function getUsuarios() {
    $.ajax({
        url: 'controlePhp/usuarios.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        $('.box_usu').empty();
        for (var i = 0; i < result.length; i++) {

            $('.box_usu').prepend('<tr><td>' + result[i].CPF + '</td><td>' + result[i].Nome + '</td><td>' + result[i].nPermi + '</td></tr>');
        }
    });
}


$("#usuarios").click(function () {
    $('#menu').empty();
    $('#menu').prepend('<h3>Usuários</h3><section class="content"><table class="striped"><thead><tr><th>Entrada</th> <th>Saida</th><th>Placa</th><th>Permissão</th><th>Ação</th> </tr><thead><tbody class="box_usu"><tbody></table></section>');
    getUsuarios();
});
$("#historico").click(function () {
    $('#menu').empty();
    $('#menu').prepend('<h3>Histórico</h3><section class="content"><table class="striped"><thead><tr><th>Entrada</th> <th>Saida</th><th>Placa</th><th>Permissão</th><th>Ação</th> </tr><thead><tbody class="box_resu"><tbody></table></section>');
    getVeiculos();
});