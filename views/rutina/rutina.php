<?php
?>
<script src="../js/rutina.js?rev=<?php echo time() ///para recgar el js 
                                    ?>">
</script>
<section class="content">
    <!-- <div class="container-fluid">-->
    <div class="row">
        <!-- INICIO DE LA PARTE IZQUIERDA-->
        <div class="col-md-12">
            <div class="card">
                <div class="row font-weight-normal ">
                    <div class="col-4">
                        <div class="container" style="font-size: medium;">
                            <p id="user" style="margin-bottom: auto;"><span class="font-weight-bold ">Usuario - </span> </p>
                            <p style="margin-bottom: auto;"><span class="font-weight-bold ">Rutina -</span></p>
                            <p style="margin-bottom: auto;"><span class="font-weight-bold ">Formulario-</span></p>
                            <p style="margin-bottom: auto;"><span class="font-weight-bold">Enviado - </span></p>
                        </div>

                    </div>
                    <div class="col-3">
                        <p>Porcentaje de proceso</p>
                        <div class="progress progress-sm" style="border-radius: 10px">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <p>40%</p>
                    </div>
                    <div class="col-3">
                        <p>Porcentaje de conformidad</p>
                        <div class="progress progress-sm mt-3" style="border-radius: 10px">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;border-radius: 10px">
                                <span class="sr-only">25% Complete</span>
                            </div>
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;border-radius: 10px">
                                <span class="sr-only">25% Complete</span>
                            </div>
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;border-radius: 10px">
                                <span class="sr-only">25% Complete</span>
                            </div>
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%; border-radius: 10px">
                                <span class="sr-only">25% Complete</span>
                            </div>
                        </div>
                        <p>85%</p>
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-primary btn-sm ">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <button type="button " class="btn btn-primary btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <!-- FIN DE LA PARTE IZQUIERDA-->
        <div class="col-md-7">
            <div class="card mt-2">
                <div class="card-header">
                    <h5 class="card-title">MONITORIO VPO MOTUPE</h5>
                </div>
                <div class="col-12">

                    <button class="btn btn-success btn-sm float-right" onclick="GenerarExcel()" style="margin:5px;"><i class="fa-regular fa-file-excel mr-2"></i>Generar Excel</button>

                </div>
            </div>
            <!-- rutina diara-->
            <div class="card ">
                <div class="card-header">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            Rutina Diaria
                        </h4>
                        <p id='contar' class="col-1"> </p>
                        <div class="card-tools">
                            <button type="button" class="btn mostrar-info" id="mostrar-info">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="card-body collapse">
                    <table id="tb_rd" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                                font-size: 11px;
                            }

                            #tb_rd td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tb_rd tr td:nth-child(1) {
                                text-align: center !important;
                                font-size: 11px;
                                width: 5.5%;


                            }

                            #tb_rd tr td:nth-child(2) {
                                text-align: center !important;
                                font-size: 11px;
                                width: 30%;


                            }

                            #tb_rd tr td:nth-child(3) {
                                text-align: center !important;
                                font-size: 11px;


                            }

                            #tb_rd tr:first-child td:nth-child(4) {
                                width: 10%;

                            }

                            #tb_rd tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tb_rd tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tb_rd tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>DESCRIPCIÓN</th>
                                <th>PLAZO</th>
                                <th>ESTADO </th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- rutina semana-->
            <div class="card ">
                <div class="card-header">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            Rutina Semanal
                        </h4>
                        <p id='contar_pr' class="col-1"></p>
                        <div class="card-tools">
                            <button type="button" class="btn mostrar-info" id="mostrar-info">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse">
                    <table id="tb_rs" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;


                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                                font-size: 11px;
                            }

                            #tb_rs td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tb_rs tr td:nth-child(1) {
                                text-align: center !important;
                                font-size: 11px;
                                width: 5.5%;


                            }

                            #tb_rs tr td:nth-child(2) {
                                text-align: center !important;
                                font-size: 11px;
                                width: 30%;


                            }

                            #tb_rs tr td:nth-child(3) {
                                text-align: center !important;
                                font-size: 11px;


                            }

                            #tb_rs tr:first-child td:nth-child(4) {
                                width: 10%;

                            }

                            #tb_rs tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tb_rs tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tb_rs tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>DESCRIPCIÓN</th>
                                <th>PLAZO</th>
                                <th>ESTADO </th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- rutina mensual-->
            <div class="card ">
                <div class="card-header ">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            Rutina Mensual
                        </h4>
                        <p id='contar_lc' class="col-1"></p>
                        <div class="card-tools">
                            <button type="button" class="btn mostrar-info" id="mostrar-info">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse">
                    <table id="tb_rm" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                            }

                            #tb_rm td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tb_rm tr td:nth-child(3) {
                                text-align: center !important;
                                font-size: 11px;


                            }

                            #tb_rm tr:first-child td:nth-child(4) {
                                width: 50%;

                            }

                            #tb_rm tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tb_rm tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tb_rm tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>DESCRIPCIÓN</th>
                                <th>PLAZO</th>
                                <th>ESTADO </th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <!-- FIN DE LA PARTE IZQUIERDA-->
        <!-- INICIO DE LA PARTE DERECHA-->
        <div class="col-md-5">
            <div class="row">

                <div class="card col-12 collapse " id="mostrar_detalle">
                    <div class="card-header">
                        <h3 class="card-title" id="concatenar">

                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool " data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <button type="button" class="ed btn btn-secondary   btn-sm mt-1 mr-1" style="font-size: small;">Realizada</button>
                        </div>
                        <div class="row font-weight-normal ">
                        <div class="mt-3 col-12">
                                <label for="area" id="area" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_1">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_1">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="subarea" id="suba" class="form-label"></label>
                                
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta1" id="pr_1" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_1">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_1">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="pregunta2" id='pr_2' class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input"value="Si" type="radio" name="pr_2">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="No" type="radio" name="pr_2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_2">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="pregunta3" id="pr_3" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_3">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_3">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_3">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="pregunta4" id="pr_4" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input"value="Si" type="radio" name="pr_4">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_4">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_5">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta5" id="pr_5" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_5">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_5">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="NA" type="radio" name="pr_5">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta6" id="pr_6" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_6">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_6">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_6">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta7" id="pr_7" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_7">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_7">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_7">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta8" id="pr_8" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input"value="Si" type="radio" name="pr_8">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="No" type="radio" name="pr_8">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="NA" type="radio" name="pr_8">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta9" id="pr_9" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_9">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_9">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_9">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta10" id="pr_10" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_10">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_10">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="NA" type="radio" name="pr_10">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta11" id="pr_11" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input"value="Si" type="radio" name="pr_11">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="No" type="radio" name="pr_11">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="NA" type="radio" name="pr_11">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta12" id="pr_12" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Si" type="radio" name="pr_12">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_12">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="NA" type="radio" name="pr_12">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta13" id="pr_13" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input"value="Si" type="radio" name="pr_13">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_13">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="NA" type="radio" name="pr_13">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-12">
                                <label for="pregunta14" id="pr_14" class="form-label"></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input"value="Si" type="radio" name="pr_14">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="pr_14">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"value="NA" type="radio" name="pr_14">
                                        <label class="form-check-label">NA</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1 col-12">
                                <label class="form-label">COLUMNA</label>
                                <div class="container pb-2 pt-1" style="background-color:#f5f5f5;  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);">
                                    <label class="form-label">COMENTARIO</label>
                                    <!-- Construct the card with style you want. Here we are using card-danger -->
                                    <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
                                    <!-- The contextual class should match the card, so we are using direct-chat-danger -->
                                    <div class="card card-danger direct-chat direct-chat-danger">
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <!-- Conversations are loaded here -->
                                            <div class="direct-chat-messages" style="height:500px" id='contenido'>

                                            </div>
                                            <!--/.direct-chat-messages-->
                                            <!-- Contacts are loaded here -->

                                            <!-- /.direct-chat-pane -->
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!--/.direct-chat -->
                                    <div id="summernote">
                                    </div>
                                    <div class="col-12 text-right">
                                        <button type="button" class="envio btn btn-outline-secondary btn-sm" style="font-size: small;">Enviar<i class="fa-solid fa-location-arrow ml-1"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- FIN DE LA PARTE DERECHA-->

    </div>

    </div>
</section>
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        // document.getElementById('user').innerHTML+=' jojo';
    });
    $(".mostrar-info").click(function() {
        $(this).closest(".card").find(".card-body").toggle();
        // listar_tarea();

    })
    listar_tb_rd();
    listar_tb_rs();
    $('#summernote').summernote({

        //TODO: bUSCAR CLOUD PARA SUBIR IMAGENES
        /*callbacks: {
            onImageUpload: function(files) {
                // Cargar imagen al servidor y agregarla al editor
                uploadImage(files[0]);
            }
        },*/
        placeholder: 'Añadir comentario',
        //tabsize: 2,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            //['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', /*'codeview', /*'help'*/ ]]
        ]

    });
</script>