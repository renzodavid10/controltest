<?php
session_start();

if (!isset($_SESSION['S_IDUSUARIO'])) {
    //echo "78787";
    header('Location: ../'); /// si mi inicion esta creada me manda a la pagina
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../utils/fontawesome/css/all.min.css">
    <title>Sistema de Control</title>
    <link rel="icon" href="../images/backus.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../plugins/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.css" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../utilitarios/DataTables/datatables.min.css" />-->
    <!-- Utilitarios -->
    <link rel="stylesheet" type="text/css" href="../utils/utilitarios/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../utils/utilitarios/dataTables.bootstrap5.min.css">
    <!--ALerts-->
    <script src="../utils/utilitarios/sweetalert.js"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">



</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell pt-1" style="font-size: 20px;"></i>
                        <span class="badge badge-warning navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" onclick="cargar_contenido('contenido_principal','tarea/tareas.php')">
                            <i class="fas fa-envelope mr-2"></i> 3 acciones sin iniciar
                            <!--<span class="float-right text-muted text-sm">3 mins</span>-->
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="../images/backus.jpg" class="img-size-32  img-circle">
                        <b> <?php echo $_SESSION['S_USUARIO'];
                            ?></b>
                        <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </a>
                    <div class="dark-mode dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" style="font-size: large;" onclick="cargar_contenido('contenido_principal','usuario/mantenimiento_perfil.php')">
                            <i class="fas fa-user-cog mr-2"></i>
                            <span class="text-muted text-sm"><b>Perfil</b></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="../controller/usuario/cerrar_sesion.php" class="dropdown-item" style="font-size: large;">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            <span class="text-muted text-sm"><b>Cerrar Sesión</b></span>
                        </a>
                        <div class="dropdown-divider">

                        </div>
                        <a href="#" class="dropdown-item">
                            <i class="fa-solid fa-stopwatch mr-2"></i>
                            <span class="text-muted text-sm"><b>Zona Horaria<b></span>
                        </a>

                    </div>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="text-center">
                <a href="index.php" class="brand-link">
                    <!-- <img src="../img/logomuni.jpeg" alt="AdminLTE Logo" class="img-fluid float-left" >-->
                    <span class="text-center">
                        <b>
                            <p style="color:FFFFFF"><?php //echo $_SESSION['S_ROL_PT'] 
                                                    ?></p>
                        </b>
                    </span>
                </a>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <div class="text-center">
                                    <img src="../images/avatar4.png" class="img-size-54  profile-user-img img-fluid img-circle "><br>
                                </div>
                                <div class="text-center">
                                    <p>
                                        <font size=3>
                                            <?php echo $_SESSION['S_DNI_PT']
                                            ?>
                                        </font>
                                    </p>

                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    INICIO
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>
                        <li class="nav-header">PRINCIPAL</li>
                        <li class="nav-item">
                            <a id="#" class="nav-link" onclick="cargar_contenido('contenido_principal','tarea/tareas.php')">
                                <i class="nav-icon fa-solid fa-list-check "></i>
                                <p>
                                    Mis Tareas

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="cargar_contenido('contenido_principal','reunion/reunion.php')">
                                <i class="nav-icon fa-regular fa-message "></i>
                                <p>
                                    Mis Reuniones
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="cargar_contenido('contenido_principal','formulario/formulario.php')">
                                <i class="nav-icon fa-regular fa-newspaper"></i>
                                <p>
                                    Formularios
                                </p>
                            </a>
                        </li>
                        <?php //if ($_SESSION['S_ROL_PT'] == "ADMIN") {

                        ?>
                        <li class="nav-header">CONFIGURACION</li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link" onclick="//cargar_contenido('contenido_principal','usuario/mantenimiento_us.php')">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Usuarios

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="//cargar_contenido('contenido_principal','zona/mantenimiento_zona.php')">
                                <i class="nav-icon fa fa-arrows-alt" aria-hidden="true"></i>
                                <p>
                                    Zona

                                </p>
                            </a>
                        </li>

                        <?php   // } 
                        ?>

                    </ul>
                    <input type="text" value="<?php //echo $_SESSION['S_IDUSUARIO_PT']; 
                                                ?>" id="txt_idPrincipal" hidden>
                    <input type="text" value="<?php //echo $_SESSION['S_ROL_PT']; 
                                                ?>" id="txt_rolPrincipal" hidden>
                    <p id="n_fechactual" class="fecha" hidden><?php echo $fechahoy ?></p>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="contenido_principal">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->


            <!-- Main content -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="col-12">
                <div class="row">
                    <!-- Default to the left -->
                    <div class="">
                        <strong>&copy; <!--Copyright MPCH GTIE - Todos los derechos reservados-->.</strong> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->


    <script type="text/javascript" src="../utils/jquery/jquery.js"></script>
    <script type="text/javascript" src="../utils/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../plugins/select2/js/select2.full.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="../utils/utilitarios/DataTables/datatables.min.js"></script>
    <!-- dataTables -->
    <script type="text/javascript" src="../utils/utilitarios/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../utils/utilitarios/dataTables.bootstrap5.min.js"></script>

    <script src="../template/dist/js/adminlte.min.js"></script>




    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            console.log("hola")
        });

        function cargar_contenido(id, vista) {
            $("#" + id).load(vista);
        }
        var idioma_espanol = {

            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Ningún dato encontrado",
            "info": "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Ningún dato encontrado",
            "infoFiltered": "(filtrados desde _MAX_ registros totales)",
            "search": "Buscar:",
            "loadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "<small style='color:blue'>Siguiente</small>",
                "sPrevious": "<small style='color:#000006'>Anterior</small>"
            },

        }
        $(function() {
            var menues = $(".nav-link");
            menues.click(function() {
                menues.removeClass("active");
                $(this).addClass("active");
            });
        })

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

        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz.";
            especiales = "8-37-39-46";
            tecla_especial = false
            for (var i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }
            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                return false;
            }
        }

        function filterFloat(evt, input) {
            var key = window.Event ? evt.which : evt.keyCode;
            var chark = String.fromCharCode(key);
            var tempValue = input.value + chark;
            if (key >= 48 && key <= 57) {
                if (filter(tempValue) === false) {
                    return false;
                } else {
                    return true;
                }
            } else {
                if (key == 8 || key == 13 || key == 0) {
                    return true;
                } else if (key == 46) {
                    if (filter(tempValue) === false) {
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    return false;
                }
            }
        }

        function filter(__val__) {
            var preg = /^([0-9]+\.?[0-9]{0,2})$/;
            if (preg.test(__val__) === true) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>