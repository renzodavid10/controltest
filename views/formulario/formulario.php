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
        <div class="col-6">
            <div class="card ">
                <div class="row">
                    <div class="col-12">
                        <div class="container font-weight-normal">
                            <p>Respuestas</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="container">
                            <div class="row font-weight-normal">
                                <p class="col-10 text-center">
                                    Category
                                </p>
                                <p class="col-1"> 87%</p>
                                <button type="button" class="btn btn-sm mb-2">
                                    <i class="fa-solid fa-chevron-up"></i>
                                </button>

                            </div>
                        </div>

                    </div>
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
<script>
    $(document).ready(function() {
        // document.getElementById('user').innerHTML+=' jojo';
    });
</script>