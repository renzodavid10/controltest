<?php
session_start();


if (isset($_SESSION['S_USUARIO'])) {
    //echo $_SESSION['S_USUARIO'];
    //echo $_SESSION['S_IDUSUARIO'];
    header('Location: views/index.php'); /// si mi inicion esta creada me manda a la pagina
}
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
    <link rel="stylesheet" href="utils/fontawesome/css/all.min.css">
    <title>Sistema de Control</title>
    <link rel="icon" href="images/backus.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css" />
    <script src="utils/utilitarios/sweetalert.js"></script>
</head>


<body>
    <div class="containere">
        <div class="forms-containere">
            <div class="signin-signup">
                <!-- <div class="signin-signup1"> -->
                <div id="loginInicio">
                    <!--<form action="" class="sign-in-form" method="POST" autocomplete="off" id="cuadrado">-->
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <input type="hidden" name="tab" id="tab" class="form-control" value="1">

                    <h3 class="title"> <img src="images/backus.png" width="150"><br>Sistema de Control</h3>
                    <p class="login-box-msg">Iniciar sesión</p>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="us_nombre" id="txtUsu" placeholder="Usuario" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="us_clave" id="txtPass" placeholder="Contraseña" required />
                    </div>
                    <br>


                    <button type="submit" class="btn" style="margin:5px;" onclick="iniciar_Sesion()">INGRESAR</button>

                    <p class="social-text">&copy; Todos los derechos reservados.</p>
                    <div class="row ">
                        <p class="col text-center">
                            <a href="recuperar.php">Olvidaste Contraseña</a>
                        </p>
                        <p class="col text-center">
                            <a href="views/register.php">Registrarse</a>
                        </p>
                    </div>
                    <!-- </form>-->
                </div>
                <!-- </div> -->

            </div>
        </div>

        <div class="panels-containere">
            <div class="panel left-panel">
                <div class="content">
                    <h1 style="font-size: xxx-large;">SISTEMA DE CONTROL</h1>
                    <p style="font-size:x-large;">
                        Bienvenido a la Plataforma Administrativa de Sistema de Control.
                    </p>

                </div>
                <img src="images/control.svg" class="image" alt="" />
            </div>

        </div>
    </div>
    <!-- jQuery -->
    <script src="template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/usuario.js?rev=<?php echo time() ///para recgar el js 
                                    ?>"></script>
</body>

</html>