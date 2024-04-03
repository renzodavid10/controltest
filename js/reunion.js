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
        url: '../controller/usuario/crear_usu.php',
        async:'true',
        type: 'get',
        data: {
            dni: desc,
            responsable: responsable,
            departa: departa,
            elemento: elemento,
            fecha: fecha,
        }
    }).done(function (e) {
        console.log(e);
    })

}
function listar_usu() {
    $.ajax({
        url: '../controller/tarea/listar_usu.php',
        type: 'POST',
        async:'false'
        

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

function listar_tmiembro() {
    tbl_primer_miembro = $("#tabla_miembro").DataTable({
        "bLengthChange" : false, 
        "ordering": false,
        //"bLengthChange": true,
        //"searching": { "regex": false },
        "searching": false,
        //"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "lengthMenu":false,
        "pageLength": 10,
        "destroy": true,
        //"async": false,
        "processing": true,
        /*"ajax": {
            "url": "../controller/persona/controlador_listar_miembrosin.php",
            type: 'POST'
        },*/

        /*"columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
           /* { "defaultContent": "" },
            { "data": "zona_deno" },
            { "data": "tiag_deno" },

            { "data": "deno" },

            { "data": "dni" },
            { "data": "nombre" },
            //{ "data": "agrupacion_denominacion" },

            { "data": "carg_deno" },
            {
                "data": "estad",
                render: function (data, type, row) {
                    if (data == 'ACTIVO') {
                        return '<span class="badge bg-success">ACTIVO</span>';
                    } else {
                        return '<span class="badge bg-danger">INACTIVO</span>';
                    }
                }
            },
            {
                "data": "estad",
                render: function (data, type, row) {
                    if (data == 'ACTIVO' && rol != 'VISITANTE') {
                        return "<button  class='editar btn btn-primary btn-sm'><i class='fa fa-edit'></i></button>&nbsp; "
                            + "<button class='detalle btn btn-warning btn-sm'><i class='fa fa-file-alt'></i></button>&nbsp;"
                            + "<button class='disabled btn btn-success btn-sm '><i class='fa fa-check-circle'></i></button>&nbsp;" +
                            "<button class='desactivar btn btn-danger btn-sm'><i class='fa fa-ban'></i></button>&nbsp;" +
                            "<button class='eliminar btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>"
                    } if (data == 'INACTIVO' && rol != 'VISITANTE') {
                        return "<button  class='editar btn btn-primary btn-sm'><i class='fa fa-edit'></i></button>&nbsp; "
                            + "<button class='detalle btn btn-warning btn-sm'><i class='fa fa-file-alt'></i></button>&nbsp;"
                            + "<button class='activar btn btn-success btn-sm '><i class='fa fa-check-circle'></i></button>&nbsp;" +
                            "<button class='disabled btn btn-danger btn-sm'><i class='fa fa-ban'></i></button>&nbsp;" +
                            "<button class='eliminar btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>"
                    }

                    else {
                        return "<button class='detalle btn btn-warning btn-sm'><i class='fa fa-file-alt'></i></button>"


                    }
                }
            },
        ],*/

        "language": idioma_espanol,
        select: true
    });

    tbl_primer_miembro.on('draw.td', function () {
        var PageInfo = $("#tabla_miembro").DataTable().page.info();
        tbl_primer_miembro.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

}

