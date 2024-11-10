<?php
?>
<script src="../js/rutina.js?rev=<?php echo time() ///para recgar el js 
                                    ?>">
</script>
<style>
    .select2-container .select2-selection--single {
        height: 38px !important;
    }

    .select2-selection__arrow {
        height: 38px !important;
    }
</style>
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
                <div class="card-body">
                    <div class="row">
                    <div class="col-4">
                        <input type="date" id="fecha_inicio" class="form-control">
                    </div>
                    <div class="col-4">
                        <input type="date" id="fecha_fin" class="form-control">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-success btn-sm float-right" onclick="GenerarExcel()" style="margin:5px;"><i class="fa-regular fa-file-excel mr-2"></i>Generar Excel</button>
                    </div>
                    </div>
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
                                font-size: 11px;
                            }

                            #tb_rm td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tb_rm tr td:nth-child(1) {
                                text-align: center !important;
                                font-size: 11px;
                                width: 5.5%;


                            }

                            #tb_rm tr td:nth-child(2) {
                                text-align: center !important;
                                font-size: 11px;
                                width: 30%;


                            }

                            #tb_rm tr td:nth-child(3) {
                                text-align: center !important;
                                font-size: 11px;


                            }

                            #tb_rm tr:first-child td:nth-child(4) {
                                width: 10%;

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
                            <button type="button" class="reali btn btn-secondary   btn-sm mt-1 mr-1" style="font-size: small;">Realizada</button>
                        </div>
                        <div class="row font-weight-normal ">
                            <div class="mt-1 col-12">
                                <label for="select_area" class="form-label">AREA</label>
                                <select class="js-example-basic-single" id="select_area" style="width: 100%">
                                    <!-- <option value="0">Responsable</option>
                                    <option>JYMDA</option>
                                    <option>DEPROTEC</option>-->
                                </select>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="select_subarea" class="form-label">SUBAREA</label>
                                <select class="js-example-basic-single" id="select_subarea" style="width: 100%">
                                </select>
                            </div>
                            <div class="mt-3 col-12" id="cuestionario">

                            </div>


                            <div class="mt-1 col-12">
                                <label class="form-label">COLUMNA</label>
                                <div class="container pb-2 pt-1" style="background-color:#f5f5f5;  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);">
                                    <label class="form-label">COMENTARIO</label>

                                    <div class="card card-danger direct-chat direct-chat-danger">

                                        <div class="card-body">

                                            <div class="direct-chat-messages" style="height:500px" id='contenido'>

                                            </div>


                                        </div>

                                    </div>

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
    listar_tb_rm();
    listar_area();
    //listar_subarea(1)
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