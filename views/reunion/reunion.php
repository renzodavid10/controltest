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
                                    ?>"></script>
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
                        <p class="col-1"> 3</p>
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
                        <p class="col-1"> 3</p>
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
        </div>
        <!-- FIN DE LA PARTE IZQUIERDA-->
        <!-- INICIO DE LA PARTE DERECHA-->
        <div class="col-md-4">
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                            <div class="card-header">
                                <h4 class="card-title text-center w-100">
                                    COMENTARIOS DE LA REUNION
                                </h4>
                            </div>
                        </a>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="form-group">
                                <textarea id="compose-textarea" class="form-control" style="height: 300px">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                        blinded by desire, that they cannot foresee</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
                    </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    3. Donec quam felis
                                </h4>
                            </div>
                        </a>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE LA PARTE DERECHA-->
    <!--</div>-->
</section>

<script>
   // listar_tarea();
    listar_usu();
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        console.log("hola")
    });

    contar_tarea('No iniciada');
    listar_empresa()
    //listar_tmiembro();
</script>