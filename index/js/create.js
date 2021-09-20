
function myFunction(){
    alert('Olá');
}

$('#form1').submit(function(e){
    e.preventDefault();

    var nomeCat = $('#nomeCat').val();
    var nPermi = $('#nPermi').val();
    alert('Olá');

    $.ajax({
        url: 'insert/insertBD.php',
        method: 'POST',
        data: {nomeCat: nomeCat, nPermi: nPermi},
        dataType: 'json'
    }).done(function(result){
        $('#nomeCat').val('');
        $('#nPermi').val('');
        console.log(result);
      
    });
});