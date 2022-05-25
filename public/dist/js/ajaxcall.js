function cargardatos() {
    let fechainicial = document.getElementById("reservationdateinicial").value;
    let fechafinal = document.getElementById('reservationdatefinal').value;
    let ordenar = $('#ordenar').children(":selected").val();
    let paginado = $('#paginado').children(":selected").val();
    let Ruta = Routing.generate('ventas_filtrado');

    $.ajax({
        data: {
            'fechaini': fechainicial.toLocaleString(),
            'fechafin': fechafinal.toLocaleString(),
            'orden': ordenar,
            'tamano': paginado
        },
        dataType: 'json',
        type: 'POST',
        url: Ruta,
    }).done(function (r) {
        console.log('Ya entre en done')
    })
}

$(function () {
    let usuario = $('#usuarios');
    let royaltie = $('#royaltie');
    let Ruta = Routing.generate('obtener_datos');

    $('#venta_productos_listadoproducto').change(function () {
        var seleccionado = $(this).children(":selected").val();
        usuario.empty();
        royaltie.empty();

        $.ajax({
            data: {'producto': seleccionado},
            dataType: 'json',
            type: 'POST',
            url: Ruta
        }).done(function (r) {
            $(r).each(function (i, v) {
                usuario.append('<option>' + v.nombre + '</option>');
                royaltie.append('<option>' + v.beneficioxventa + '</option>');
            })
        });
    })
})




