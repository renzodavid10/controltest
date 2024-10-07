$("#tb_rd").on('click', 'tr', function () {
    //Muestro la parte derecha

    if (tbl_tb_rd.rows().count() > 0) {
        //console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        $('.ed').removeClass('btn-primary').addClass('btn-secondary');
        $('.ed:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');

        tbl_tb_rd.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tb_rd.row(this).data();
        document.getElementById('concatenar').innerHTML = 'Cuestionario Diario Seleccionado';
        document.getElementById('pr_1').innerHTML = '1.'+rowData['cues1'];
        document.getElementById('pr_2').innerHTML = '2.'+rowData['cues2'];
        document.getElementById('pr_1').innerHTML = '1.'+rowData['cues1'];
        document.getElementById('pr_2').innerHTML = '2.'+rowData['cues2'];
        document.getElementById('pr_3').innerHTML = '3.'+ rowData['cues3'];
        document.getElementById('pr_4').innerHTML = '4.'+ rowData['cues4'];
        document.getElementById('pr_5').innerHTML = '5.'+rowData['cues5'];
        document.getElementById('pr_6').innerHTML = '6.'+rowData['cues6'];
        document.getElementById('pr_7').innerHTML = '7.'+rowData['cues7'];
        document.getElementById('pr_8').innerHTML = '8.'+rowData['cues8'];
        document.getElementById('pr_9').innerHTML = '9.'+rowData['cues9'];
        document.getElementById('pr_10').innerHTML = '10.'+rowData['cues10'];
        document.getElementById('pr_11').innerHTML = '11.'+ rowData['cues11'];
        document.getElementById('pr_12').innerHTML = '12.'+rowData['cues12'];
        document.getElementById('pr_13').innerHTML = '13.'+rowData['cues13'];
        document.getElementById('pr_14').innerHTML = '14.'+rowData['cues14'];


        let valorSeleccionado = $('input[name="pr_1"]:checked').val();


        //CAMBIAR ESTADO

        //evento_cambio(rowData['tare_id']);
        //comentario(rowData['tare_id']);
        //listar_comentario(rowData['tare_id']);
    }
})
var tbl_tb_rd;
function listar_tb_rd() {
    tbl_tb_rd = $("#tb_rd").DataTable({
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
            "url": "../controller/cuestionario/listar_cuest.php",
            type: 'POST',
            data: {
                cues_id: 1,
            }
        },

        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
            { "defaultContent": "" },
            { "defaultContent": "Registre su cuestionario diario" },
            { "data": "resp_fecha" },
            { "data": "resp_status" },
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
    tbl_tb_rd.on('draw.td', function () {
        var PageInfo = $("#tb_rd").DataTable().page.info();
        tbl_tb_rd.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}
var tbl_tb_rs;
function listar_tb_rs() {
    tbl_tb_rs = $("#tb_rs").DataTable({
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
            "url": "../controller/cuestionario/listar_cuest.php",
            type: 'POST',
            data: {
                cues_id: 2,
            }
        },

        "columns": [
            /* Datos que se va a traer en el procedimiento almacenado */
            { "defaultContent": "" },
            { "defaultContent": "Registre su cuestionario semanal" },
            { "data": "resp_fecha" },
            { "data": "resp_status" },
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
    tbl_tb_rs.on('draw.td', function () {
        var PageInfo = $("#tb_rs").DataTable().page.info();
        tbl_tb_rs.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}