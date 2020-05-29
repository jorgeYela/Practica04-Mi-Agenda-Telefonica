$(buscar_datos());

function buscar_datos(consulta) {
    $.ajax({
        url: '../php/buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#contenedor4").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}

$(document).on('keyup', '#txtBusqueda', function(){
    var valor = $(this).val();
    if(valor != "") {
        buscar_datos(valor);
    } else {
        buscar_datos();
    }
});