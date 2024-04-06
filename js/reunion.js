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
        listar_tarea();
        contar_tarea('No iniciada');
    })

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
            //console.log(data);
        } else
            llenardata = "<option value='0'>Responsable </option>";
        document.getElementById('select_responsable').innerHTML = llenardata;
        console.log("N o");
    });
}

$(".mostrar-info").click(function () {
    $(this).closest(".card").find(".card-body").toggle();
})
var tbl_primer_miembro;
var tbl_tare_progreso;
var tbl_tare_lc;
var tbl_tare_rt;
function listar_tarea() {
    tbl_primer_miembro = $("#tabla_tarea_si").DataTable({
        "columnDefs": [
            { "width": '50%', "targets": [3] },
            { "width": '6% ', "targets": [5,6] }
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
            type: 'POST'
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
        /*"ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST'
        },
        
        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
        /*{ "defaultContent": "" },
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

    ],*/

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
        /*"ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST'
        },
        
        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
        /*{ "defaultContent": "" },
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

    ],*/

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
        /*"ajax": {
            "url": "../controller/tarea/listar_tar.php",
            type: 'POST'
        },
        
        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
        /*{ "defaultContent": "" },
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

    ],*/

        "language": idioma_espanol,
        select: true
    });
    tbl_tare_rt.on('draw.td', function () {
        var PageInfo = $("#tabla_tarea_rt").DataTable().page.info();
        tbl_tare_rt.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });




}
function contar_tarea(tipo) {
    $.ajax({
        url: '../controller/tarea/contar_tarea.php',
        type: 'POST',
        async: 'false'

    }).done(function (resp) {
        console.log(resp + ' numero de:');

        //let data = JSON.parse(resp);
        //console.log(data.length);
        /* if (resp > 0) {
             
             document.getElementById("contar").innerHTML=resp;
         }*/
        resp > 0 ? document.getElementById("contar").innerHTML = resp : document.getElementById("contar").innerHTML = 0;
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
