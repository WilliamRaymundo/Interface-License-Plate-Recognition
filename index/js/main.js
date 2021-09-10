function getVeiculos() {
    $.ajax({
        url: 'processa.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        console.log(result);
        $('.box_resu').empty();
        for (var i = 0; i < result.length; i++) {
           
            $('.box_resu').prepend('<div class="elements"><h4>' + result[i].placa + '</h4><p>' + result[i].cor + '</p></div>');
        }
    });
    setTimeout(getVeiculos, 10000);
}
getVeiculos();