$(".mostrar-info").click(function () {
    $(this).closest(".card").find(".card-body").toggle();
    // listar_tarea();

})
var tbl_mi_tarea;
var tbl_mi_progreso;
var tbl_mi_lc;
var tbl_mi_rt;
var tbl_mi_cer;
function listar_mi_tarea() {
    tbl_mi_tarea = $("#tabla_tarea_mi").DataTable({
        /*"columnDefs": [
            { "width": '50% ', "targets": [3] },
            { "width": '6%', "targets": [5, 6] }
        ],*/
        "bLengthChange": false,
        "ordering": false,
        //"bLengthChange": true,
        //"searching": { "regex": false },
        "searching": false,
        //"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "lengthMenu": false,
        "pageLength": 8,
        "destroy": true,
        //"async": false,
        //"processing": true,
        "ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST',
            data: { accion: 'No iniciada', dni: '' },
        },


        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
            { "defaultContent": "" },
            { "data": "tare_crea" },
            { "data": "tare_resp" },
            { "data": "tare_desc" },
            { "data": "tare_tiem" },
            {
                "defaultContent": "<button  class='editar btn btn-sm'><i class='fa-solid fa-flag'></i></button>&nbsp; ",

            },
            {
                "defaultContent": "<button  class='editar btn btn-sm'><i class='fa-solid fa-angle-right'></i></button>&nbsp; ",
            },

        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_mi_tarea.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_mi").DataTable().page.info();
        tbl_mi_tarea.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
    tbl_mi_progreso = $("#tabla_tarea_pr").DataTable({
        "bLengthChange": false,
        "ordering": false,
        //"bLengthChange": true,
        //"searching": { "regex": false },
        "searching": false,
        //"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "lengthMenu": false,
        "pageLength": 8,
        "destroy": true,
        //"async": false,
        //"processing": true,
        "ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST',
            data: {
                accion: 'En Progreso', dni: ''
            },

        },

        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
            { "defaultContent": "" },
            { "data": "tare_crea" },
            { "data": "tare_resp" },
            { "data": "tare_desc" },
            { "data": "tare_tiem" },
            {
                "defaultContent": "<button  class='editar btn btn-sm'><i class='fa-solid fa-flag'></i></button>&nbsp; ",

            },
            {
                "defaultContent": " <button  class='editar btn  btn-sm'><i class='fa-solid fa-angle-right'></i></button>&nbsp; ",
            },

        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_mi_progreso.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_pr").DataTable().page.info();
        tbl_mi_progreso.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
    tbl_mi_lc = $("#tabla_tarea_lc").DataTable({
        columnDefs: [
            { width: '50%', targets: [3] }
        ],
        "bLengthChange": false,
        "ordering": false,
        //"bLengthChange": true,
        //"searching": { "regex": false },
        "searching": false,
        //"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "lengthMenu": false,
        "pageLength": 8,
        "destroy": true,
        //"async": false,
        //"processing": true,
        "ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST',
            data: { accion: 'Lista para Cierre', dni: '' },
        },

        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
            { "defaultContent": "" },
            { "data": "tare_crea" },
            { "data": "tare_resp" },
            { "data": "tare_desc" },
            { "data": "tare_tiem" },
            {
                "defaultContent": "<button  class='editar btn btn-sm'><i class='fa-solid fa-flag'></i></button>&nbsp; ",

            },
            {
                "defaultContent": " <button  class='editar btn  btn-sm'><i class='fa-solid fa-angle-right'></i></button>&nbsp; ",
            },

        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_mi_lc.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_lc").DataTable().page.info();
        tbl_mi_lc.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
    tbl_mi_rt = $("#tabla_tarea_rt").DataTable({
        columnDefs: [
            { width: '50%', targets: [3] }
        ],
        "bLengthChange": false,
        "ordering": false,
        //"bLengthChange": true,
        //"searching": { "regex": false },
        "searching": false,
        //"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "lengthMenu": false,
        "pageLength": 8,
        "destroy": true,
        //"async": false,
        "processing": true,
        "ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST',
            data: {
                accion: 'Retrasada', dni: ''
            },
        },

        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
            { "defaultContent": "" },
            { "data": "tare_crea" },
            { "data": "tare_resp" },
            { "data": "tare_desc" },
            { "data": "tare_tiem" },
            {
                "defaultContent": "<button  class='editar btn btn-sm'><i class='fa-solid fa-flag'></i></button>&nbsp; ",

            },
            {
                "defaultContent": " <button  class='editar btn  btn-sm'><i class='fa-solid fa-angle-right'></i></button>&nbsp; ",
            },

        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_mi_rt.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_rt").DataTable().page.info();
        tbl_mi_rt.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    tbl_mi_cer = $("#tabla_tarea_cer").DataTable({
        columnDefs: [
            { width: '50%', targets: [3] }
        ],
        "bLengthChange": false,
        "ordering": false,
        //"bLengthChange": true,
        //"searching": { "regex": false },
        "searching": false,
        //"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "lengthMenu": false,
        "pageLength": 8,
        "destroy": true,
        //"async": false,
        //"processing": true,
        "ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST',
            data: {
                accion: 'Cerrada', dni: ''
            },

        },

        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
            { "defaultContent": "" },
            { "data": "tare_crea" },
            { "data": "tare_resp" },
            { "data": "tare_desc" },
            { "data": "tare_tiem" },
            {
                "defaultContent": "<button  class='editar btn btn-sm'><i class='fa-solid fa-flag'></i></button>&nbsp; ",

            },
            {
                "defaultContent": " <button  class='editar btn  btn-sm'><i class='fa-solid fa-angle-right'></i></button>&nbsp; ",
            },

        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_mi_cer.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_cer").DataTable().page.info();
        tbl_mi_cer.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

}

$("#tabla_tarea_mi").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_mi_tarea.rows().count() > 0) {
        //alert(tbl_mi_tarea.rows().count())
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";

        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_mi_tarea.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_mi_tarea.row(this).data();

        document.getElementById('descri').value = rowData['tare_desc'];
        document.getElementById('fvenci').value = rowData['tare_tiem'];
        document.getElementById('select_responsable2').value = rowData['tare_desc'];
        $('#select_responsable2').select2().val(rowData["tare_resp"]).trigger('change.select2');
        $('#select_departamentos').select2().val(rowData["tare_depa"]).trigger('change.select2');
        document.getElementById('select_departamentos').value = rowData['tare_depa'];
        document.getElementById('select_departamentos').value = rowData['tare_desc'];
        console.log(rowData);
        //CAMBIAR ESTADO
        evento_cambio(rowData['tare_id']);
        comentario(rowData['tare_id']);
        listar_comentario(rowData['tare_id'])
    }
})



$("#tabla_tarea_pr").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    // alert(tbl_mi_progreso.rows().count())
    if (tbl_mi_progreso.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_mi_progreso.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_mi_progreso.row(this).data();

        document.getElementById('descri').value = rowData['tare_desc'];
        document.getElementById('fvenci').value = rowData['tare_tiem'];
        document.getElementById('select_responsable2').value = rowData['tare_desc'];
        $('#select_responsable2').select2().val(rowData["tare_resp"]).trigger('change.select2');
        $('#select_departamentos').select2().val(rowData["tare_depa"]).trigger('change.select2');
        document.getElementById('select_departamentos').value = rowData['tare_depa'];
        document.getElementById('select_departamentos').value = rowData['tare_desc'];
        console.log(rowData);
        //CAMBIAR ESTADO
        evento_cambio(rowData['tare_id']);
        comentario(rowData['tare_id']);
        listar_comentario(rowData['tare_id'])
    }
})


$("#tabla_tarea_lc").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_mi_lc.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(3)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_mi_lc.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_mi_lc.row(this).data();

        document.getElementById('descri').value = rowData['tare_desc'];
        document.getElementById('fvenci').value = rowData['tare_tiem'];
        document.getElementById('select_responsable2').value = rowData['tare_desc'];
        $('#select_responsable2').select2().val(rowData["tare_resp"]).trigger('change.select2');
        $('#select_departamentos').select2().val(rowData["tare_depa"]).trigger('change.select2');
        document.getElementById('select_departamentos').value = rowData['tare_depa'];
        document.getElementById('select_departamentos').value = rowData['tare_desc'];
        console.log(rowData);
        //CAMBIAR ESTADO
        evento_cambio(rowData['tare_id'])

    }
})


$("#tabla_tarea_rt").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_mi_rt.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_mi_rt.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_mi_rt.row(this).data();

        document.getElementById('descri').value = rowData['tare_desc'];
        document.getElementById('fvenci').value = rowData['tare_tiem'];
        document.getElementById('select_responsable2').value = rowData['tare_desc'];
        $('#select_responsable2').select2().val(rowData["tare_resp"]).trigger('change.select2');
        $('#select_departamentos').select2().val(rowData["tare_depa"]).trigger('change.select2');
        document.getElementById('select_departamentos').value = rowData['tare_depa'];
        document.getElementById('select_departamentos').value = rowData['tare_desc'];
        console.log(rowData);
        //CAMBIAR ESTADO
        evento_cambio(rowData['tare_id'])

    }
})


$("#tabla_tarea_cer").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_mi_cer.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(5)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_mi_cer.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_mi_cer.row(this).data();

        document.getElementById('descri').value = rowData['tare_desc'];
        document.getElementById('fvenci').value = rowData['tare_tiem'];
        document.getElementById('select_responsable2').value = rowData['tare_desc'];
        $('#select_responsable2').select2().val(rowData["tare_resp"]).trigger('change.select2');
        $('#select_departamentos').select2().val(rowData["tare_depa"]).trigger('change.select2');
        document.getElementById('select_departamentos').value = rowData['tare_depa'];
        document.getElementById('select_departamentos').value = rowData['tare_desc'];
        console.log(rowData);
        //CAMBIAR ESTADO
        evento_cambio(rowData['tare_id'])
    }
})



function evento_cambio(id) {
    $('.ed').off('click').on('click', function () {
        // var valor = $(this).text();
        // console.log(valor);
        $.ajax({
            url: '../controller/tarea/cambiar_estado.php',
            type: 'POST',
            data: {
                id: id,
                estado: $(this).text(),
            }
        }).done(function (e) {
            console.log("HIZO PRIMERO");
            listar_mi_tarea();
            listar_mi_siempre();
            document.getElementById("mostrar_detalle").style.display = "none";
            //contar_tarea('No iniciada');
            console.log(e);
        });
    });
}

function contar_mi_tarea(tipo) {
    $.ajax({
        url: '../controller/tarea/contar_tarea.php',
        type: 'POST',
        async: 'false',
        data: {
            tipo: tipo,
            dni: '',
        }

    }).done(function (resp) {
        console.log(resp + ' numero de:' + tipo);

        //let data = JSON.parse(resp);
        //console.log(data.length);
        /* if (resp > 0) {
             
             document.getElementById("contar").innerHTML=resp;
         }*/
        if (tipo == 'No iniciada') {
            resp > 0 ? document.getElementById("contar").innerHTML = resp : document.getElementById("contar").innerHTML = 0;
        }
        if (tipo == 'En Progreso') {
            resp > 0 ? document.getElementById("contar_pr").innerHTML = resp : document.getElementById("contar_pr").innerHTML = 0;
        }
        if (tipo == 'Lista para Cierre') {
            resp > 0 ? document.getElementById("contar_lc").innerHTML = resp : document.getElementById("contar_lc").innerHTML = 0;
        }
        if (tipo == 'Retrasada') {
            resp > 0 ? document.getElementById("contar_rt").innerHTML = resp : document.getElementById("contar_rt").innerHTML = 0;
        }
        if (tipo == 'Cerrada') {
            resp > 0 ? document.getElementById("contar_cer").innerHTML = resp : document.getElementById("contar_cer").innerHTML = 0;
        }
    });
}
function listar_mi_siempre() {

    contar_mi_tarea('No iniciada');
    contar_mi_tarea('En Progreso');
    contar_mi_tarea('Lista para Cierre');
    contar_mi_tarea('Retrasada');
    contar_mi_tarea('Cerrada');
}
//EL OFF SIRVE PARA NO SE REPIRTA EL EVENTO
function comentario(id_tare) {
    $('.envio').off('click').on('click', function () {
        coment = $('#summernote').summernote('code');
        console.log(coment);
        $('#summernote').summernote('reset');
        //console.log(document.getElementById('derecha').innerHTML );
        //document.getElementById('derecha').innerHTML += `<div class="direct-chat-text">${coment}</div>`;
        $.ajax({
            url: '../controller/comentario/coment.php',
            type: 'POST',
            async: 'false',
            data: {
                coment: coment,
                id_tare: id_tare,
            }
        }).done(function (resp) {
            console.log(resp);
            listar_comentario(id_tare)

        });
    })
}
function listar_comentario(id_tare) {
    $.ajax({
        url: '../controller/comentario/listar_coment.php',
        type: 'POST',
        async: 'false',
        data: {
            //coment: coment,
            id_tare: id_tare,
        }
    }).done(function (resp) {
        console.log(resp);
        document.getElementById('contenido').innerHTML = resp;
    });
}