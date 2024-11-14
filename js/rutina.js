
$(document).ready(function () {
    $('.js-example-basic-single').select2();
    //listar_tarea();
});
$("#tb_rd").on('click', 'tr', function () {
    //Muestro la parte derecha

    if (tbl_tb_rd.rows().count() > 0) {
        //console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        $('.reali').removeClass('btn-primary').addClass('btn-secondary');
        $('.reali:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');

        tbl_tb_rd.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tb_rd.row(this).data();

        document.getElementById('concatenar').innerHTML = 'Cuestionario Diario Seleccionado';
        if (rowData['cues_id'] == 1) {

            document.getElementById('cuestionario').innerHTML = '';
            document.getElementById('cuestionario').innerHTML += '' +
                '<label for="pregunta1" id="pr_1" class="form-label"> ' + 1 + ' ' + rowData['cues1'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_1" id="ocultarDiv1">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_1" id="mostrarDiv1">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_1" checked id="ocultarDiv">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div1">' +
                '<textarea id="descri1" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta2" id="pr_2" class="form-label"> ' + 2 + ' ' + rowData['cues2'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_2" id="ocultarDiv2">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_2" id="mostrarDiv2">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_2" checked id="ocultarDiv2">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div2">' +
                '<textarea id="descri2" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta3" id="pr_3" class="form-label"> ' + 3 + ' ' + rowData['cues3'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_3" id="ocultarDiv3">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_3" id="mostrarDiv3">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_3" checked id="ocultarDiv3">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div3">' +
                '<textarea id="descri3" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta4" id="pr_4" class="form-label"> ' + 4 + ' ' + rowData['cues4'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_4" id="ocultarDiv4">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_4" id="mostrarDiv4">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_4" checked id="ocultarDiv4"> ' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div4">' +
                '<textarea id="descri4" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta5" id="pr_5" class="form-label"> ' + 5 + ' ' + rowData['cues5'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_5" id="ocultarDiv5">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_5" id="mostrarDiv5">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_5" checked id="ocultarDiv5">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div5">' +
                '<textarea id="descri5" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta6" id="pr_6" class="form-label"> ' + 6 + ' ' + rowData['cues6'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_6" id="ocultarDiv6"> ' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_6" id="mostrarDiv6"> ' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_6" checked id="ocultarDiv6"> ' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div6">' +
                '<textarea id="descri6" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta7" id="pr_7" class="form-label"> ' + 7 + ' ' + rowData['cues7'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_7" id="ocultarDiv7">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_7" id="mostrarDiv7">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_7" checked id="ocultarDiv7"> ' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div7">' +
                '<textarea id="descri7" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            $('#mostrarDiv1').on('click', function () {
                $('#div1').show();
            });
            $('#mostrarDiv2').on('click', function () {
                $('#div2').show();
            });
            $('#mostrarDiv3').on('click', function () {
                $('#div3').show();
            });
            $('#mostrarDiv4').on('click', function () {
                $('#div4').show();
            });
            $('#mostrarDiv5').on('click', function () {
                $('#div5').show();
            });
            $('#mostrarDiv6').on('click', function () {
                $('#div6').show();
            });
            $('#mostrarDiv7').on('click', function () {
                $('#div7').show();
            });
            $('#ocultarDiv1').on('click', function () {
                $('#div1').hide();
            });
            $('#ocultarDiv2').on('click', function () {
                $('#div2').hide();
            });
            $('#ocultarDiv3').on('click', function () {
                $('#div3').hide();
            });
            $('#ocultarDiv4').on('click', function () {
                $('#div4').hide();
            });
            $('#ocultarDiv5').on('click', function () {
                $('#div5').hide();
            });
            $('#ocultarDiv6').on('click', function () {
                $('#div6').hide();
            });
            $('#ocultarDiv7').on('click', function () {
                $('#div7').hide();
            });
            $('.reali').off('click').on('click', function () {
                let fecha = rowData['resp_fecha'];
                let respid = rowData['resp_id'];
                let area = $('#select_area').select2().val();;
                let subarea = $('#select_subarea').select2().val();
                let cue1 = $('input[name="pr_1"]:checked').val();
                let cue2 = $('input[name="pr_2"]:checked').val();
                let cue3 = $('input[name="pr_3"]:checked').val();
                let cue4 = $('input[name="pr_4"]:checked').val();
                let cue5 = $('input[name="pr_5"]:checked').val();
                let cue6 = $('input[name="pr_6"]:checked').val();
                let cue7 = $('input[name="pr_7"]:checked').val();
                let cue8 = '';
                let cue9 = '';
                let cue10 = '';
                let cue11 = '';
                let cue12 = '';
                let cue13 = '';
                let cue14 = '';
                let come1 = $('#descri1').val();
                let come2 = $('#descri2').val();
                let come3 = $('#descri3').val();
                let come4 = $('#descri4').val();
                let come5 = $('#descri5').val();
                let come6 = $('#descri6').val();
                let come7 = $('#descri7').val();
                let come8 = '';
                let come9 = '';
                let come10 = '';
                let come11 = '';
                let come12 = '';
                let come13 = '';
                let come14 = '';
                responder_cuest(
                    fecha,
                    respid,
                    cue1,
                    cue2,
                    cue3,
                    cue4,
                    cue5,
                    cue6,
                    cue7,
                    cue8,
                    cue9,
                    cue10,
                    cue11,
                    cue12,
                    cue13,
                    cue14,
                    area,
                    subarea,
                    come1,
                    come2,
                    come3,
                    come4,
                    come5,
                    come6,
                    come7,
                    come8,
                    come9,
                    come10,
                    come11,
                    come12,
                    come13,
                    come14)
            })

        }


    }
})

$("#tb_rs").on('click', 'tr', function () {
    //Muestro la parte derecha

    if (tbl_tb_rs.rows().count() > 0) {
        //console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        $('.reali').removeClass('btn-primary').addClass('btn-secondary');
        $('.reali:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');

        tbl_tb_rs.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tb_rs.row(this).data();

        document.getElementById('concatenar').innerHTML = 'Cuestionario Diario Seleccionado';
        if (rowData['cues_id'] == 2) {
            document.getElementById('cuestionario').innerHTML = '';
            document.getElementById('cuestionario').innerHTML += '' +
                '<label for="pregunta11" id="pr_11" class="form-label"> ' + 1 + ' ' + rowData['cues11'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_11" id="ocultarDiv11">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_11" id="mostrarDiv11">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_11" checked id="ocultarDiv11">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div11">' +
                '<textarea id="descri11" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta12" id="pr_12" class="form-label"> ' + 2 + ' ' + rowData['cues12'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_12" id="ocultarDiv12">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_12" id="mostrarDiv12">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_12" checked id="ocultarDiv12">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div12">' +
                '<textarea id="descri12" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta13" id="pr_13" class="form-label"> ' + 3 + ' ' + rowData['cues13'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_13" id="ocultarDiv13" >' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_13" id="mostrarDiv13">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_13" checked id="ocultarDiv13">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div13">' +
                '<textarea id="descri13" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            $('#mostrarDiv11').on('click', function () {
                $('#div11').show();
            });
            $('#mostrarDiv12').on('click', function () {
                $('#div12').show();
            });
            $('#mostrarDiv13').on('click', function () {
                $('#div13').show();
            });
            $('#ocultarDiv11').on('click', function () {
                $('#div11').hide();
            });
            $('#ocultarDiv12').on('click', function () {
                $('#div12').hide();
            });
            $('#ocultarDiv13').on('click', function () {
                $('#div13').hide();
            });
            $('.reali').off('click').on('click', function () {
                let fecha = rowData['resp_fecha'];
                let respid = rowData['resp_id'];
                let area = $('#select_area').select2().val();;
                let subarea = $('#select_subarea').select2().val();
                let cue1 = '';
                let cue2 = '';
                let cue3 = '';
                let cue4 = '';
                let cue5 = '';
                let cue6 = '';
                let cue7 = '';
                let cue8 = '';
                let cue9 = '';
                let cue10 = '';
                let cue11 = $('input[name="pr_11"]:checked').val();
                let cue12 = $('input[name="pr_12"]:checked').val();
                let cue13 = $('input[name="pr_13"]:checked').val();
                let cue14 = '';
                let come1 = '';
                let come2 = '';
                let come3 = '';
                let come4 = '';
                let come5 = '';
                let come6 = '';
                let come7 = '';
                let come8 = '';
                let come9 = '';
                let come10 = '';
                let come11 = $('#descri11').val();
                let come12 = $('#descri12').val();
                let come13 = $('#descri13').val();
                let come14 = '';
                responder_cuest(
                    fecha,
                    respid,
                    cue1,
                    cue2,
                    cue3,
                    cue4,
                    cue5,
                    cue6,
                    cue7,
                    cue8,
                    cue9,
                    cue10,
                    cue11,
                    cue12,
                    cue13,
                    cue14,
                    area,
                    subarea,
                    come1,
                    come2,
                    come3,
                    come4,
                    come5,
                    come6,
                    come7,
                    come8,
                    come9,
                    come10,
                    come11,
                    come12,
                    come13,
                    come14)
            })
        }


    }
})
$("#tb_rm").on('click', 'tr', function () {
    //Muestro la parte derecha

    if (tbl_tb_rm.rows().count() > 0) {
        //console.log(document.getElementById("mostrar_detalle").style.display);
        document.getElementById("mostrar_detalle").style.display = "block";
        $('.reali').removeClass('btn-primary').addClass('btn-secondary');
        $('.reali:nth-child(1)').removeClass('btn-secondary').addClass('btn-primary');

        tbl_tb_rm.$('tr.selected').removeClass('selected');
        // Agregar la clase de selección a la fila clickeada
        $(this).addClass('selected');
        // Obtener los datos de la fila seleccionada
        var rowData = tbl_tb_rm.row(this).data();
        console.log(rowData['cues_id'])

        document.getElementById('concatenar').innerHTML = 'Cuestionario Diario Seleccionado';
        if (rowData['cues_id'] == 3) {
            document.getElementById('cuestionario').innerHTML = '';
            document.getElementById('cuestionario').innerHTML += '' +
                '<label for="pregunta8" id="pr_8" class="form-label"> ' + 1 + ' ' + rowData['cues8'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_8" id="ocultarDiv8">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_8"  id="mostrarDiv8">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_8" checked id="ocultarDiv8">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div8">' +
                '<textarea id="descri8" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta9" id="pr_9" class="form-label"> ' + 2 + ' ' + rowData['cues9'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_9" id="ocultarDiv9">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_9" id="mostrarDiv9">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_9" checked id="ocultarDiv9">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div9">' +
                '<textarea id="descri9" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta10" id="pr_10" class="form-label"> ' + 3 + ' ' + rowData['cues10'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_10" id="ocultarDiv10">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_10" id="mostrarDiv10">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_10" checked id="ocultarDiv10">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div10">' +
                '<textarea id="descri10" class="form-control" rows="4" style="font-size: small;"placeholder="Escribe aquí tu comentario..."></textarea>' +
                '</div>';
            document.getElementById('cuestionario').innerHTML += '<div class="mt-3 col-12">' +
                '<label for="pregunta14" id="pr_14" class="form-label"> ' + 4 + ' ' + rowData['cues14'] + '</label>' +
                '<div class="form-group">' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="Si" type="radio" name="pr_14" id="ocultarDiv14">' +
                '<label class="form-check-label">Si</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="No" type="radio" name="pr_14" id="mostrarDiv14">' +
                '<label class="form-check-label">No</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input class="form-check-input" value="NA" type="radio" name="pr_14" checked id="ocultarDiv14">' +
                '<label class="form-check-label">NA</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="mt-3 col-12" style="display:none" id="div14">' +
                '<textarea id="descri14" placeholder="Escribe aquí tu comentario..." class="form-control" rows="4" style="font-size: small;"></textarea>' +
                '</div>';
            $('#mostrarDiv8').on('click', function () {
                $('#div8').show();
            });
            $('#mostrarDiv9').on('click', function () {
                $('#div9').show();
            });
            $('#mostrarDiv10').on('click', function () {
                $('#div10').show();
            });
            $('#mostrarDiv14').on('click', function () {
                $('#div14').show();
            });
            $('#ocultarDiv8').on('click', function () {
                $('#div8').hide();
            });
            $('#ocultarDiv9').on('click', function () {
                $('#div9').hide();
            });
            $('#ocultarDiv10').on('click', function () {
                $('#div10').hide();
            });
            $('#ocultarDiv14').on('click', function () {
                $('#div14').hide();
            });

            $('.reali').off('click').on('click', function () {
                let fecha = rowData['resp_fecha'];
                let respid = rowData['resp_id'];
                let area = $('#select_area').select2().val();;
                let subarea = $('#select_subarea').select2().val();
                let cue1 = '';
                let cue2 = '';
                let cue3 = '';
                let cue4 = '';
                let cue5 = '';
                let cue6 = '';
                let cue7 = '';
                let cue8 = $('input[name="pr_8"]:checked').val();
                let cue9 = $('input[name="pr_9"]:checked').val();
                let cue10 = $('input[name="pr_10"]:checked').val();
                let cue11 = '';
                let cue12 = '';
                let cue13 = '';
                let cue14 = $('input[name="pr_14"]:checked').val();
                let come1 = '';
                let come2 = '';
                let come3 = '';
                let come4 = '';
                let come5 = '';
                let come6 = '';
                let come7 = '';
                let come8 = $('#descri8').val();
                let come9 = $('#descri9').val();
                let come10 = $('#descri10').val();
                let come11 = '';
                let come12 = '';
                let come13 = '';
                let come14 = $('#descri14').val();
                responder_cuest(
                    fecha,
                    respid,
                    cue1,
                    cue2,
                    cue3,
                    cue4,
                    cue5,
                    cue6,
                    cue7,
                    cue8,
                    cue9,
                    cue10,
                    cue11,
                    cue12,
                    cue13,
                    cue14,
                    area,
                    subarea,
                    come1,
                    come2,
                    come3,
                    come4,
                    come5,
                    come6,
                    come7,
                    come8,
                    come9,
                    come10,
                    come11,
                    come12,
                    come13,
                    come14)
            })
        }

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
var tbl_tb_rm;
function listar_tb_rm() {
    tbl_tb_rm = $("#tb_rm").DataTable({
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
                cues_id: 3,
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
    tbl_tb_rm.on('draw.td', function () {
        var PageInfo = $("#tb_rs").DataTable().page.info();
        tbl_tb_rm.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

function listar_area() {
    $.ajax({
        url: '../controller/cuestionario/listar_area.php',
        type: 'POST',
        async: 'false'


    }).done(function (resp) {

        let data = JSON.parse(resp);

        if (data.length > 0) {
            llenardata = "<option value='0'>AREA </option>";
            for (let i = 0; i < data.length; i++) {
                llenardata += "<option value='" + data[i]['area_id'] + "'>" + data[i]['area_nombre'] + " </option>";
                // console.log(data[i]['usua_dni']);
                //break;
            }
            document.getElementById('select_area').innerHTML = llenardata;
        } else
            llenardata = "<option value='0'>AREA </option>";
        document.getElementById('select_area').innerHTML = llenardata;

    });
}
function listar_subarea(areaid) {
    $.ajax({
        url: '../controller/cuestionario/listar_subarea.php',
        type: 'POST',
        async: 'false',
        data: {
            areaid: areaid,
        }


    }).done(function (resp) {
        console.log(resp);
        let data = JSON.parse(resp);

        if (data.length > 0) {
            llenardata = "<option value='0'>SUBAREA </option>";
            for (let i = 0; i < data.length; i++) {
                llenardata += "<option value='" + data[i]['area_id'] + "'>" + data[i]['suba_nombre'] + " </option>";
                // console.log(data[i]['usua_dni']);
                //break;
            }
            document.getElementById('select_subarea').innerHTML = llenardata;
        } else
            llenardata = "<option value='0'>SUBAREA </option>";
        document.getElementById('select_subarea').innerHTML = llenardata;

    });
}
$('#select_area').on('select2:opening', function () { /// si seleccion un analisis me bota el id y los examenes dentro del nalisis
    let ids = document.getElementById('select_area').value;
    console.log(ids)
    listar_subarea(ids);

});
$('#select_area').on('select2:closing', function () { /// si seleccion un analisis me bota el id y los examenes dentro del nalisis
    let ids = document.getElementById('select_area').value;
    console.log(ids)
    listar_subarea(ids);

});
$('#select_area').on('select2:select', function () { /// si seleccion un analisis me bota el id y los examenes dentro del nalisis
    let ids = document.getElementById('select_area').value;
    console.log(ids)
    listar_subarea(ids);

});
function GenerarExcel() {
    let $fecha1 = document.getElementById('fecha_inicio').value;
    let $fecha2 = document.getElementById('fecha_fin').value;

    // Realizamos la petición fetch
    fetch('../controller/export/llamar_reportcu.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            fecha1: $fecha1,
            fecha2: $fecha2,
        })
    })

        .then(response => {
            // Verificamos si la respuesta es exitosa
            if (!response.ok) {
                throw new Error('Error en la solicitud');
            }
            // Convertimos la respuesta a blob
            return response.blob();
        })
        .then(blob => {
            // Creamos un enlace para descargar el archivo
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'CUESTIONARIOS.xlsx'; // Nombre del archivo descargado
            document.body.appendChild(a);
            a.click(); // Simulamos el click para descargar
            window.URL.revokeObjectURL(url); // Liberamos la URL del objeto
            document.body.removeChild(a); // Limpiamos el DOM
        })
        .catch(error => {
            console.error('Error:', error);
        })
};
function responder_cuest(
    fecha,
    respid,
    cue1,
    cue2,
    cue3,
    cue4,
    cue5,
    cue6,
    cue7,
    cue8,
    cue9,
    cue10,
    cue11,
    cue12,
    cue13,
    cue14,
    area,
    subarea,
    come1,
    come2,
    come3,
    come4,
    come5,
    come6,
    come7,
    come8,
    come9,
    come10,
    come11,
    come12,
    come13,
    come14) {
    $.ajax({
        url: '../controller/cuestionario/respo_cuest.php',
        type: 'POST',
        async: 'false',
        data: {
            fecha: fecha,
            respid: respid,
            cue1: cue1,
            cue2: cue2,
            cue3: cue3,
            cue4: cue4,
            cue5: cue5,
            cue6: cue6,
            cue7: cue7,
            cue8: cue8,
            cue9: cue9,
            cue10: cue10,
            cue11: cue11,
            cue12: cue12,
            cue13: cue13,
            cue14: cue14,
            area: area,
            subarea: subarea,
            come1: come1,
            come2: come2,
            come3: come3,
            come4:come4,
            come5:come5,
            come6:come6,
            come7:come7,
            come8:come8,
            come9:come9,
            come10:come10,
            come11:come11,
            come12:come12,
            come13:come13,
            come14:come14
        }

    }).done(function (resp) {
        console.log(resp);
        listar_tb_rd();
        listar_tb_rm();
        listar_tb_rs();
        document.getElementById("mostrar_detalle").style.display = "none";
    });
}
