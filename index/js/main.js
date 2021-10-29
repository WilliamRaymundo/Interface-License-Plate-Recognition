 $(document).ready(function() {
            $('#estadoa').select2();
        });

function getHistorico() {
    $.ajax({
        url: 'controlePhp/historico.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        $('.box_resu').empty();
        for (var i = 0; i < result.length; i++) {

            $('.box_resu').prepend('<tr><td>' + result[i].entrada + '</td><td>' + result[i].saida + '</td><td>' + result[i].capPlaca + '</td><td>' + result[i].permi + '</td><td><a href="#" class="btn-floating blue"><i class="material-icons">check</i></a><a href="#" class="btn-floating blue"><i class="material-icons">close</i></a><a class="btn-floating blue"onclick="abrirPag('+"'"+'read/detalhesHistorico.php?id='+result[i].id+"'"+');"><i class="material-icons">list</i></a></td></tr>');
        }
    });
    setTimeout(getHistorico, 10000);
}
getHistorico();

/*function getUsuarios() {
    $.ajax({
        url: 'controlePhp/usuarios.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        $('.box_usu').empty();
        for (var i = 0; i < result.length; i++) {

            $('.box_usu').prepend('<tr><td>' + result[i].CPF + '</td><td>' + result[i].Nome + '</td></tr>');
        }
    });
}*/
function getUsuarios() {
    $.ajax({
        url: 'controlePhp/usuarios.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        $('.box_usu').empty();
        for (var i = 0; i < result.length; i++) {

            $('.box_usu').prepend('<tr><td>' + result[i].CPF + '</td><td>' + result[i].Nome + '</td><td><a href="#" class="btn-floating blue"><i class="material-icons">edit</i></a><a href="#" class="btn-floating blue"><i class="material-icons">delete</i></a></td></tr>');
        }
    });
}
function getVeiculos() {
    $.ajax({
        url: 'controlePhp/veiculo.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        $('.box_vei').empty();
        for (var i = 0; i < result.length; i++) {

            $('.box_vei').prepend('<tr><td>' + result[i].placa + '</td><td>' + result[i].permi + '</td><td><a href="#" class="btn-floating blue"><i class="material-icons">edit</i></a><a href="#" class="btn-floating blue"><i class="material-icons">delete</i></a></td></tr>');
        }
    });
}




$("#usuarios").click(function () {
    $('#menu').empty();
    $('#menu').prepend('<h3>Usuários</h3><section class="content"><a class="btn" onclick="abrirPag('+"'"+'insert/insUsuario.php'+"'"+');">Adicionar</a><a class="btn" onclick="abrirPag('+"'"+'insert/insTipoUsuario.php'+"'"+');">Criar Tipo</a><table class="striped"><thead><tr><th>CPF</th> <th>Nome</th><th>Ação</th> </tr><thead><tbody class="box_usu"><tbody></table></section>');
    getUsuarios();
});
$("#historico").click(function () {
    $('#menu').empty();
    $('#menu').prepend('<h3>Histórico</h3><section class="content"><a class="btn" onclick="abrirPag('+"'"+'insert/insLocal.php'+"'"+');">Adicionar</a><table class="striped"><thead><tr><th>Entrada</th> <th>Saida</th><th>Placa</th><th>Permissão</th><th>Ação</th> </tr><thead><tbody class="box_resu"><tbody></table></section>');
    getHistorico();
});

$("#veiculos").click(function () {
    $('#menu').empty();
    $('#menu').prepend('<h3>Veículo</h3><section class="content"><a class="btn" onclick="abrirPag('+"'"+'insert/insVeiculo.php'+"'"+');">Adicionar</a><a class="btn" onclick="abrirPag('+"'"+'insert/insTipoVeiculo.php'+"'"+');">Criar Tipo</a><table class="striped"><thead><tr><th>Placa</th><th>Permissão</th><th>Ação</th> </tr><thead><tbody class="box_vei"><tbody></table></section>');
    getVeiculos();
});

function GetXMLHttp() {
    if (navigator.appName == "Microsoft Internet Explorer") {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else {
        xmlHttp = new XMLHttpRequest();
    }
    return xmlHttp;
}

var xmlRequest = GetXMLHttp();

function myFunction(){
    alert('OláSSS');
     $(document).ready(function() {
            $('#estadoa').select2();
        });
}

function abrirPag(valor){
    var url = valor;
    
    xmlRequest.open("GET",url,true);    
    xmlRequest.onreadystatechange = mudancaEstado;
    xmlRequest.send(null);
 
        if (xmlRequest.readyState == 1) {
            document.getElementById("formulario").innerHTML = "<h1></h1>";
            myFunction();
        }
 
    return url;
}
 
function mudancaEstado(){
    if (xmlRequest.readyState == 4){
        document.getElementById('formulario').style.display = 'block';
        document.getElementById("formulario").innerHTML = xmlRequest.responseText;
    }

}
function fecharPagUsu(){
    document.getElementById('formulario').style.display = 'none';
}
function alterar(){
 
    document.getElementById('aassociar').style.display = 'inline-block';
    document.getElementById('button-sub-asso').style.display = 'none';
    document.getElementById('button-sub-ex-asso').style.display = 'inline-block';
    
}
function alterara(){
    
    document.getElementById('aassociar').style.display = 'none';
    document.getElementById('button-sub-asso').style.display = 'inline-block';
    document.getElementById('button-sub-ex-asso').style.display = 'none';
     document.getElementById('estadoa').value = "";
    
}