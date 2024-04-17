function crear_tarea() {
    let desc = document.getElementById('txt_desc').value;
    let responsable = document.getElementById('select_responsable').value;
    let departa = document.getElementById('select_departamento').value;
    let elemento = document.getElementById('select_elemento').value;
    let fecha = document.getElementById('txt_fechaculmina').value;
    /*let email = document.getElementById('email').value;
    let pass = document.getElementById('password').value;
    let pass2 = document.getElementById('password2').value;
    let empresa = document.getElementById('select_empresa').value;*/

    //return console.log(fecha);
    $.ajax({
        url: '../controller/tarea/crear_tar.php',
        //async:'false',
        type: 'POST',
        data: {
            desc: desc,
            responsable: responsable,
            departa: departa,
            elemento: elemento,
            fecha: fecha,
        }
    }).done(function (e) {
        console.log(e);
        if (e == 1) {
            return Swal.fire("Mensaje de Confirmacion", "Registro Exitoso", "success").then((value) => {
                limpiar_registro();
                listar_tarea();
                contar_tarea('No iniciada');
            });
        }

    })

}

function limpiar_registro() {
    document.getElementById("txt_desc").value = "";
    document.getElementById("txt_fechaculmina").value = "";
    $('#select_departamento').select2().val("0").trigger('change.select2');
    $('#select_responsable').select2().val("0").trigger('change.select2');
    $('#select_elemento').select2().val("0").trigger('change.select2');
}

function listar_usu() {
    $.ajax({
        url: '../controller/tarea/listar_usu.php',
        type: 'POST',
        async: 'false'


    }).done(function (resp) {
        console.log(resp);

        let data = JSON.parse(resp);
        console.log(data.length);
        if (data.length > 0) {
            llenardata = "<option value='0'>Responsable </option>";
            for (let i = 0; i < data.length; i++) {
                llenardata += "<option value='" + data[i]['usua_dni'] + "'>" + data[i]['nombre'] + " </option>";
                // console.log(data[i]['usua_dni']);
                //break;
            }
            document.getElementById('select_responsable').innerHTML = llenardata;
            document.getElementById('select_responsable2').innerHTML = llenardata;
            //console.log(data);
        } else
            llenardata = "<option value='0'>Responsable </option>";
        document.getElementById('select_responsable').innerHTML = llenardata;
        console.log("N o");
    });
}

$(".mostrar-info").click(function () {
    $(this).closest(".card").find(".card-body").toggle();
    // listar_tarea();

})
var tbl_primer_miembro;
var tbl_tare_progreso;
var tbl_tare_lc;
var tbl_tare_rt;
var tbl_tare_cer;
function listar_tarea() {
    tbl_primer_miembro = $("#tabla_tarea_si").DataTable({
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
            data: { accion: 'No iniciada', }
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
    tbl_primer_miembro.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_si").DataTable().page.info();
        tbl_primer_miembro.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
    tbl_tare_progreso = $("#tabla_tarea_pr").DataTable({
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
                accion: 'En Progreso',
            }
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
    tbl_tare_progreso.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_pr").DataTable().page.info();
        tbl_tare_progreso.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
    tbl_tare_lc = $("#tabla_tarea_lc").DataTable({
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
            data: { accion: 'Lista para Cierre', }
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
    tbl_tare_lc.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_lc").DataTable().page.info();
        tbl_tare_lc.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
    tbl_tare_rt = $("#tabla_tarea_rt").DataTable({
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
                accion: 'Retrasada',
            }
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
    tbl_tare_rt.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_rt").DataTable().page.info();
        tbl_tare_rt.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    tbl_tare_cer = $("#tabla_tarea_cer").DataTable({
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
                accion: 'Cerrada',
            }
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
    tbl_tare_cer.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_cer").DataTable().page.info();
        tbl_tare_cer.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });


}
function contar_tarea(tipo) {
    $.ajax({
        url: '../controller/tarea/contar_tarea.php',
        type: 'POST',
        async: 'false',
        data: {
            tipo: tipo,
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

function listar_empresa() {
    $.ajax({
        url: '../controller/empresa/listar_empr.php',
        type: 'POST',
        async: 'false'
    }).done(function (resp) {
        console.log(resp);

        let data = JSON.parse(resp);
        console.log(data);
        console.log(data.length+'cadena')
        if (data.length > 0) {
            llenardata = "<option value='0'>Elemento </option>";
            for (let i = 0; i < data.length; i++) {
                llenardata += "<option value='" + data[i]['empr_name'] + "'>" + data[i]['empr_name'] + " </option>";
                // console.log(data[i]['usua_dni']);
                //break;
            }
            document.getElementById('select_elemento').innerHTML = llenardata;
            //console.log(data);
        } else
            llenardata = "<option value='0'>Elemento </option>";
        document.getElementById('select_elemento').innerHTML = llenardata;
        console.log("N o");
    });
}

$("#tabla_tarea_si").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_primer_miembro.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";

        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_primer_miembro.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_primer_miembro.row(this).data();

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
        listar_comentario(rowData['tare_id']);
        /* $('.ed').on('click',function () {
             //var valor = $(this).text();
             // console.log(valor);
             $.ajax({
                 url: '../controller/tarea/cambiar_estado.php',
                 type: 'POST',
                 data: {
                     id: rowData['tare_id'],
                     estado: $(this).text(),
                 }
             }).done(function (e) {
                 console.log("HIZO PRIMERO");
                 listar_tarea();
                 listar_siempre();
                 document.getElementById("mostrar_detalle").style.display = "none";
                 //contar_tarea('No iniciada');
                 console.log(e);
             });
         });*/
    }
})

$("#tabla_tarea_pr").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_tare_progreso.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_tare_progreso.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tare_progreso.row(this).data();

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
        listar_comentario(rowData['tare_id']);
    }
})

$("#tabla_tarea_lc").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_tare_lc.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(3)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_tare_lc.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tare_lc.row(this).data();

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
        comentario(rowData['tare_id']);
        listar_comentario(rowData['tare_id']);
    }
})
$("#tabla_tarea_rt").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_tare_rt.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_tare_rt.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tare_rt.row(this).data();

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
        listar_comentario(rowData['tare_id']);
        /* $('.ed').on('click',function () {
             //var valor = $(this).text();
             // console.log(valor);
             $.ajax({
                 url: '../controller/tarea/cambiar_estado.php',
                 type: 'POST',
                 data: {
                     id: rowData['tare_id'],
                     estado: $(this).text(),
                 }
             }).done(function (e) {
                 console.log("HIZO TERCERO");
                 listar_tarea();
                 listar_siempre();
                 document.getElementById("mostrar_detalle").style.display = "none";
                 //contar_tarea('No iniciada');
                 console.log(e+'Esto devolvio la base de datos');
             });
         });*/
    }
})
$("#tabla_tarea_cer").on('click', 'tr', function () {
    //Muestro la parte derecha
    //$("#mostrar_detalle").toggle();
    if (tbl_tare_cer.rows().count() > 0) {
        console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        //$('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
        // $('.ed:nth-child(2)').removeClass('btn-secondary').addClass('btn-primary');
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(5)').removeClass('btn-secondary').addClass('btn-primary');
        //document.getElementById("mostrar_detalle").style.display == 'none' ? document.getElementById("mostrar_detalle").style.display = "block" : document.getElementById("mostrar_detalle").style.display = "none";
        // Remover la clase de selección de todas las filas
        tbl_tare_cer.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tare_cer.row(this).data();

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
        listar_comentario(rowData['tare_id']);
        /*$('.ed').on('click',function () {
            //var valor = $(this).text();
            // console.log(valor);
            $.ajax({
                url: '../controller/tarea/cambiar_estado.php',
                type: 'POST',
                data: {
                    id: rowData['tare_id'],
                    estado: $(this).text(),
                }
            }).done(function (e) {
                console.log("HIZO CUARTO");
                listar_tarea();
                listar_siempre();
                document.getElementById("mostrar_detalle").style.display = "none";
                //contar_tarea('No iniciada');
                console.log(e);
            });
        });*/
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
            listar_tarea();
            listar_siempre();
            document.getElementById("mostrar_detalle").style.display = "none";
            //contar_tarea('No iniciada');
            console.log(e + 'Quee s');
        });
    });
}

function listar_siempre() {

    contar_tarea('No iniciada');
    contar_tarea('En Progreso');
    contar_tarea('Lista para Cierre');
    contar_tarea('Retrasada');
    contar_tarea('Cerrada');
}
function GenerarExcel() {
    fetch('../controller/export/llamar_export.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'myfile.xlsx';
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);
        });
};
// window.location.href = '../controller/export/exportar_datos.php';

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