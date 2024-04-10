<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../utils/fontawesome/css/all.min.css">
    <title>Sistema de Control</title>
    <link rel="icon" href="../images/backus.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../plugins/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.css" />




</head>

<body>
    <style>
        .select2-container .select2-selection--single {
            height: 38px !important;
        }

        .select2-selection__arrow {
            height: 38px !important;
        }

        body {
            background-image: url(../images/fondo1.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-color: #B5B2B2;



        }

        .container #cabeza {
            background-color: #154170;
            font-weight: bold;

        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center" id="cabeza">
                        <h4 style="color: white;">REGISTRO</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="name" class="form-label">Nombres:</label>
                                <input type="text" class="form-control" id="name" name="nombre" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="ap_p" class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="ap_p" name="ap_m" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="ap_m" class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" id="ap_m" name="ap_m" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="dni" class="form-label">DNI:</label>
                                <input type="text" class="form-control" id="dni" name="dni" onkeypress="return soloNumeros(event);" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="cel" class="form-label">Celular:</label>
                                <input type="text" class="form-control" id="cel" name="celular" onkeypress="return soloNumeros(event);" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" id="email" placeholder="" class="form-control">
                            </div>
                            <div class="col-6 ">
                                <label for="select_empresa" class="form-label">Empresa:</label>
                                <select class="js-example-basic-single" id="select_empresa" style="width: 100%">

                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="password2" class="form-label">Repetir Contraseña </label>
                                <input type="password" id="password2" placeholder="" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class=" col-12 text-end">
                            <button type="button" class="btn btn-secondary " onclick="regresar()">Regresar</button>
                            <button type="button" class="btn btn-primary btn-lg" onclick="crear_cuenta()">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="../utils/jquery/jquery.js"></script>
<script type="text/javascript" src="../utils/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/select2/js/select2.full.min.js"></script>
<!--ALerts-->
<script src="../utils/utilitarios/sweetalert.js"></script>
<script src="../js/register.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        console.log("hola")
    });

    function soloNumeros(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla == 8) {
            return true;
        }
        // Patron de entrada, en este caso solo acepta numeros
        patron = /[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
    listar_empresa();
</script>