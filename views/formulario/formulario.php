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
            <div class="card">
                <div class="row font-weight-normal ">
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Progress bars</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-2">
                        <p>Porcentaje de proceso</p>
                        <div class="progress progress-sm" style="border-radius: 10px">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <p>40%</p>
                    </div>
                    <div class="col-2">
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
                    <div class="col-2">


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
            <div class="card">
                <div class="card-body">
                    <div class="row  font-weight-normal">
                        <div class="col-6">
                            <label for="">Usuario:</label>
                            <input type="text" hidden>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <div class="card-tools">
                                <button type="button" class="btn ">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="">Rutina</label>
                            <input type="text" class="form-control">

                        </div>

                        <div class="col-6">
                            <label for="">Formulario</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="">Enviado</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- FIN DE LA PARTE IZQUIERDA-->
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Respuestas</h3>
                </div>
                <div class="col-12">
                </div>
            </div>

        </div>
        <!-- INICIO DE LA PARTE DERECHA-->
        <div class="col-6">

            <div class="card ">

                <div class="card-header">
                    <h3 class="card-title w-100">
                        Respuestas
                    </h3>
                </div>

                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <!--<div id="summernote">
                            </div>-->

                </div>
            </div>
        </div>
        <!-- FIN DE LA PARTE DERECHA-->
    </div>

    </div>
</section>