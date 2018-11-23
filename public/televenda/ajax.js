    $(document).ready(function(){
        comeca();
    })
    var timerI = null;
    var timerR = false;

function para(){
    if(timerR)
        clearTimeout(timerI)
    timerR = false;
}
function comeca(){
    para();
    lista();
}
function busca_mp3() {
    data: {
        url: 'mp3/'+dados[$i].mp3
    }
    return JSON();
}
function lista(){
    $.ajax({
        url:"get.php",
           success: function (textStatus){
             $('#lista').html(textStatus); //mostrando listagem por vendas
         }
     })
     $.ajax({
        url:"getC.php",
           success: function (textStatus){
             $('#listaC').html(textStatus); //mostrando resultado do 1º colocado.
         }
     })
     timerI = setTimeout("lista()", 6200); //tempo de espera (6200 Padrão)
            timerR = true;
}