<?php
?>
<script src="../js/formulario.js?rev=<?php echo time() ///para recgar el js 
                                        ?>">
</script>
<section class="content">
    <!-- <div class="container-fluid">-->
    <div class="row">
        <!-- INICIO DE LA PARTE IZQUIERDA-->
        <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="row  font-weight-normal">
                        <div class="col-6">
                            <label for="">DNI:</label>
                            <input type="text" hidden>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="">NOMBRE:</label>
                            <input type="text" class="form-control">

                        </div>
                        <div class="col-6">
                            <label for="">APELLIDO PATERNO:</label>
                            <input type="text" class="form-control">

                        </div>

                        <div class="col-6">
                            <label for="">APELLIDO MATERNO:</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mt-2">
                    <div class="card-header">
                        <h3 class="card-title">Respuestas</h3>
                    </div>
                    <div class="col-12">
                    </div>
                </div>

            </div>

            <!-- FIN DE LA PARTE IZQUIERDA-->
            <!-- INICIO DE LA PARTE DERECHA-->
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 collapse" id="accordion">
                        <div class="card mt-2 card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                <div class="card-header">
                                    <h3 class="card-title text-center w-100">
                                        Respuestas
                                    </h3>
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

    </div>
</section>