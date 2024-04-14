<!--<div class="row">
    <div class="col-lg-8 connectedSortable ui-sortable">
        <div class="card ml-1 mt-3">
            <div class="card-header">
                <h5 class="car-title">PLAN VPO MOTUPE</h5>
            </div>
            <!-- Donut chart -->
<!-- <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Donut Chart
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="donut-chart" style="height: 200px;"></div>
                </div>
                <!-- /.card-body-->
<!--</div>
        </div>
    </div>
</div>-->
<script src="../js/reunion.js?rev=<?php echo time() ///para recgar el js 
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
        <div class="col-md-8">
            <div class="card mt-2">
                <div class="card-header">
                    <h5 class="card-title">PLAN VPO MOTUPE</h5>
                </div>
                <div class="col-12">

                    <button class="btn btn-success btn-sm float-right" onclick="GenerarExcel()" style="margin:5px;"><i class="fa-regular fa-file-excel mr-2"></i>Generar Excel</button>

                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    <h5 class="card-title text-center">Añadir Accion</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <input type="text" id="txt_desc" placeholder="Descripción de la acción" class="form-control">
                            <div id="valid_apepat_editar">
                            </div>
                        </div>
                        <div class="col-6 mb-2 font-weight-normal ">
                            <select class="js-example-basic-single" id="select_responsable" style="width: 100%">
                                <!-- <option value="0">Responsable</option>
                                    <option>JYMDA</option>
                                    <option>DEPROTEC</option>-->
                            </select>
                        </div>
                        <div class="col-6 mb-2">

                            <input type="date" id="txt_fechaculmina" class="form-control">
                        </div>
                        <div class="col-6 mb-2 font-weight-normal ">
                            <select class="js-example-basic-single font-weight-normal " id="select_departamento" style="width: 100%">
                                <option value="0">Departamento</option>
                                <option>SEGURIDAD</option>
                                <option>MEDIO AMBIENTE</option>
                                <option>INGENIERIA</option>
                                <option>ENVASADO</option>
                                <option>ELABORACION</option>
                                <option>NABS</option>
                            </select>
                        </div>
                        <div class="col-6 mb-2 font-weight-normal ">
                            <select class="js-example-basic-single" id="select_elemento" style="width: 100%">

                            </select>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <div class=" col-12 text-right">
                        <button type="button" class="btn btn-primary btn-md" onclick="crear_tarea()">Guardar</button>
                    </div>
                </div>
            </div>
            <!-- INICIO DE NO INICIADA-->
            <div class="card ">
                <div class="card-header">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            No Iniciada
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
                    <!-- <div class="col-12 table-responsive">-->
                    <table id="tabla_tarea_si" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                            }

                            #tabla_tarea_si td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tabla_tarea_si tr td:nth-child(3) {
                                text-align: center !important;


                            }

                            #tabla_tarea_si tr:first-child td:nth-child(4) {
                                width: 50%;

                            }

                            #tabla_tarea_si tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tabla_tarea_si tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tabla_tarea_si tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>CREACIÓN</th>
                                <th>RESPONSABLE</th>
                                <th>DESCRIPCIÓN </th>
                                <th>PLAZO</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>
                    <!--</div>-->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- INICIO DE EN PROGRESO-->
            <div class="card ">
                <div class="card-header">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            En Progreso
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
                    <table id="tabla_tarea_pr" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                            }

                            #tabla_tarea_pr td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tabla_tarea_pr tr td:nth-child(3) {
                                text-align: center !important;


                            }

                            #tabla_tarea_pr tr:first-child td:nth-child(4) {
                                width: 50%;

                            }

                            #tabla_tarea_pr tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tabla_tarea_pr tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tabla_tarea_pr tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>CREACIÓN</th>
                                <th>RESPONSABLE</th>
                                <th>DESCRIPCIÓN </th>
                                <th>PLAZO</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- INICIO DE LISTA PARA CIERRE-->
            <div class="card ">
                <div class="card-header ">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            Lista para cierre
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
                    <table id="tabla_tarea_lc" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                            }

                            #tabla_tarea_lc td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tabla_tarea_lc tr td:nth-child(3) {
                                text-align: center !important;


                            }

                            #tabla_tarea_lc tr:first-child td:nth-child(4) {
                                width: 50%;

                            }

                            #tabla_tarea_lc tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tabla_tarea_lc tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tabla_tarea_si tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>CREACIÓN</th>
                                <th>RESPONSABLE</th>
                                <th>DESCRIPCIÓN </th>
                                <th>PLAZO</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- INICIO DE RETRASADA-->
            <div class="card ">
                <div class="card-header">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            Retrasada
                        </h4>
                        <p id='contar_rt' class="col-1"> </p>
                        <div class="card-tools">
                            <button type="button" class="btn mostrar-info" id="mostrar-info">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="card-body collapse">
                    <!-- <div class="col-12 table-responsive">-->
                    <table id="tabla_tarea_rt" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                            }


                            #tabla_tarea_rt td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tabla_tarea_rt tr td:nth-child(3) {
                                text-align: center !important;


                            }

                            #tabla_tarea_rt tr:first-child td:nth-child(4) {
                                width: 50%;

                            }

                            #tabla_tarea_rt tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tabla_tarea_rt tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tabla_tarea_si tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>CREACIÓN</th>
                                <th>RESPONSABLE</th>
                                <th>DESCRIPCIÓN </th>
                                <th>PLAZO</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>
                    <!--</div>-->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- INICIO DE CERRADA-->
            <div class="card ">
                <div class="card-header ">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            Cerrada
                        </h4>
                        <p id='contar_cer' class="col-1"></p>
                        <div class="card-tools">
                            <button type="button" class="btn mostrar-info" id="mostrar-info">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse">
                    <table id="tabla_tarea_cer" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                            }

                            #tabla_tarea_cer td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tabla_tarea_cer tr td:nth-child(3) {
                                text-align: center !important;


                            }

                            #tabla_tarea_cer tr:first-child td:nth-child(4) {
                                width: 50%;

                            }

                            #tabla_tarea_cer tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tabla_tarea_cer tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tabla_tarea_cer tr:first-child td:nth-child(7) {
                                width: 5.5%;
                            }
                        </style>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>CREACIÓN</th>
                                <th>RESPONSABLE</th>
                                <th>DESCRIPCIÓN </th>
                                <th>PLAZO</th>
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
        <div class="col-md-4">
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card mt-2 card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                            <div class="card-header">
                                <h4 class="card-title text-center w-100">
                                    COMENTARIOS DE LA REUNION
                                </h4>
                            </div>
                        </a>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <!--<div id="summernote">
                            </div>-->

                        </div>
                    </div>
                </div>
                <div class="card col-12 collapse " id="mostrar_detalle">
                    <div class="card-header">
                        <h3 class="card-title">
                            Información
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool " data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <button type="button" class="ed btn btn-primary   btn-sm mt-1 mr-1" style="font-size: small;" onclick="">No iniciada</button>
                            <button type="button" class="ed btn btn-secondary btn-sm mt-1 mr-1" style="font-size: small;">En Progreso</button>
                            <button type="button" class="ed btn btn-secondary btn-sm mt-1 mr-1" style="font-size: small;" onclick="">Lista para Cierre</button>
                            <button type="button" class="ed btn btn-secondary btn-sm mt-1 mr-1" style="font-size: small;">Cancelada</button>
                            <button type="button" class="ed btn btn-secondary btn-sm mt-1 mr-1" style="font-size: small;">Cerrada</button>
                        </div>
                        <div class="row font-weight-normal ">
                            <div class="mt-3 col-12">
                                <label for="descri" class="form-label">DESCRIPCIÓN DE LA ACCIÓN</label>
                                <textarea id="descri" class="form-control" rows="4" style="font-size: small;"></textarea>
                            </div>
                            <div class="mt-2 col-12">
                                <label for="nreu" class="form-label">NOMBRE DE LA REUNIÓN</label>
                                <input type="text" placeholder="Nombre de la reunión" class="form-control" id="nreu">
                            </div>
                            <div class="mt-2 col-12" style="font-weight: 900;box-shadow: 0px 3px 8px rgb(20 ,8 ,8 ,0.1); color:#5773EF;">
                                <font>
                                    PLAN VPO MOTUPE
                                </font>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="fvenci" class="form-label">FECHA DE VENCIMIENTO</label>
                                <input type="date" class="form-control" id="fvenci">
                            </div>
                            <div class="mt-1 col-12">
                                <label for="select_responsable2" class="form-label">RESPONSABLE</label>
                                <select class="js-example-basic-single" id="select_responsable2" style="width: 100%">
                                    <!-- <option value="0">Responsable</option>
                                    <option>JYMDA</option>
                                    <option>DEPROTEC</option>-->
                                </select>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="select_indicadores" class="form-label">INDICADORES</label>
                                <select class="js-example-basic-single" id="select_indicadores" style="width: 100%">
                                    <!-- <option value="0">Responsable</option>
                                    <option>JYMDA</option>
                                    <option>DEPROTEC</option>-->
                                </select>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="select_departamentos" class="form-label">DEPARTAMENTOS</label>
                                <select class="js-example-basic-single" id="select_departamentos" style="width: 100%">
                                    <option value="0">Departamento</option>
                                    <option>SEGURIDAD</option>
                                    <option>MEDIO AMBIENTE</option>
                                    <option>INGENIERIA</option>
                                    <option>ENVASADO</option>
                                    <option>ELABORACION</option>
                                    <option>NABS</option>
                                </select>
                            </div>
                            <div class="mt-1 col-12">
                                <label for="oracion" class="form-label">ORIGEN DE LA ACCION</label>
                                <input type="text" id="oracion" class="form-control">
                            </div>
                            <div class="mt-1 col-12">
                                <label for="craiz" class="form-label">ORIGEN DE LA ACCION</label>
                                <input type="text" id="craiz" class="form-control">
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

    <!--</div>-->
</section>

<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script>
    listar_tarea();
    listar_usu();
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        //listar_tarea();
        console.log("hola")
    });


    listar_empresa()
    contar_tarea('No iniciada');
    contar_tarea('En Progreso');
    contar_tarea('Lista para Cierre');
    contar_tarea('Retrasada');
    contar_tarea('Cerrada');
    //listar_tmiembro();

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

    //TODO: BUSCAR cloud para subir images
    /*function uploadImage(file) {
        let formData = new FormData();
        formData.append('file', file);
        console.log(file);
        $.ajax({
            url: '../controller/cimages/images.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resp) {
                resp = JSON.parse(resp);
                console.log(resp['url'])
                $('#summernote').summernote('editor.insertImage', resp['url']);
            }
        });
    }
    */
</script>