
function myFunction(){
    alert('OláSSS');
}


$('#forma1').submit(function(e){
    e.preventDefault();
    alert("foi");

    var u_button = $('#button-sub').attr('name');
    alert(u_button);

    var u_name = $('#nomeCat').val();
    var u_comment = $('#nPermi').val();

    //console.log(u_name, u_comment);
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
});