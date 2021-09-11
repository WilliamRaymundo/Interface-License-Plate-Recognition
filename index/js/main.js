function getVeiculos() {
    $.ajax({
        url: 'processa.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        console.log(result);
        $('.box_resu').empty();
        for (var i = 0; i < result.length; i++) {
           
            $('.box_resu').prepend('<tr><td>' + result[i].entrada + '</td><td>' + result[i].saida + '</td><td>' + result[i].placa + '</td><td>' + result[i].permi + '</td></tr>');
        }
    });
    setTimeout(getVeiculos, 10000);
}
getVeiculos();