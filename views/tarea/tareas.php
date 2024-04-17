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
<script src="../js/mytag.js?rev=<?php echo time() ///para recgar el js 
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
    <!--<div class="container-fluid">-->
    <div class="row">
        <!-- INICIO DE LA PARTE IZQUIERDA-->
        <div class="col-md-8">
            <div class="card mt-2">
                <div class="card-header">
                    <h4 class="col-10 card-title w-100">
                        Mis Acciones
                    </h4>
                </div>
                <div class="card-body collapse">
                    <div class="form-group">
                        <label for="inputEstimatedBudget">Estimated budget</label>
                        <input type="number" id="inputEstimatedBudget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputSpentBudget">Total amount spent</label>
                        <input type="number" id="inputSpentBudget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEstimatedDuration">Estimated project duration</label>
                        <input type="number" id="inputEstimatedDuration" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- MIS TAREAS NO INICIADAS-->
            <div class="card ">
                <div class="card-header">
                    <div class="row ">
                        <h4 class="col-10 card-title w-100">
                            No iniciada
                        </h4>
                        <p class="col-1" id="contar"></p>
                        <div class="card-tools">
                            <button type="button" class="btn mostrar-info">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse">
                    <table id="tabla_tarea_mi" class="table table-sm text-center table-striped  table-hover" style="width: 100%">
                        <style>
                            table {
                                overflow-x: auto;
                                font-size: small;

                            }

                            table td {
                                word-wrap: break-word;
                                max-width: 400px;
                            }

                            #tabla_tarea_mi td {
                                white-space: inherit;
                                text-align: justify !important;
                                vertical-align: middle;
                            }

                            #tabla_tarea_mi tr td:nth-child(3) {
                                text-align: center !important;


                            }

                            #tabla_tarea_mi tr:first-child td:nth-child(4) {
                                width: 50%;

                            }

                            #tabla_tarea_mi tr td:nth-child(5) {
                                width: 10%;
                                /*align-items: center;*/
                                text-align: center !important;
                            }

                            #tabla_tarea_mi tr:first-child td:nth-child(6) {
                                width: 5.5%;
                            }

                            #tabla_tarea_mi tr:first-child td:nth-child(7) {
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
            </div>
            <!-- Fin MIS TAREAS No Iniciadas-->
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
                            Lista para Cierre
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
                            Retrasadas
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
                            Cerradas
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
                <div class="card col-12 collapse" id="mostrar_detalle">
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
                                        <button type="button" class="envio btn btn-outline-secondary btn-sm" style="font-size: small;" onclick="">Enviar<i class="fa-solid fa-location-arrow ml-1"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- FIN DE LA PARTE DERECHA-->
        <!--</div>-->
    </div>
</section>

<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- FLOT CHARTS -->
<script src="../template/plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../template/plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../template/plugins/flot/plugins/jquery.flot.pie.js"></script>
<script>
    listar_mi_tarea();
    listar_mi_siempre();
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        //listar_tarea();
        console.log("hola")
    });
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
    /*$(function() {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    /*
     * DONUT CHART
     * -----------
     */

    /*var donutData = [{
            label: 'Series2',
            data: 30,
            color: '#3c8dbc'
        },
        {
            label: 'Series3',
            data: 20,
            color: '#0073b7'
        },
        {
            label: 'Series4',
            data: 50,
            color: '#00c0ef'
        }
    ]
    $.plot('#donut-chart', donutData, {
        series: {
            pie: {
                show: true,
                radius: 1,
                innerRadius: 0.5,
                label: {
                    show: true,
                    radius: 2 / 3,
                    formatter: labelFormatter,
                    threshold: 0.1
                }

            }
        },
        legend: {
            show: false
        }
    })
    /*
     * END DONUT CHART
     */

    //})

    /*function labelFormatter(label, series) {
        console.log()
        return '<div style="font-size:8px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
            label +
            '<br>' +
            Math.round(series.percent) + '%</div>'
    */
</script>