<?php
session_start();
require_once '../../model/model_comentario.php';

$MC = new mode_comentario;
$tar_id = htmlspecialchars($_POST['id_tare'], ENT_QUOTES, 'UTF-8');
$respuesta = $MC->listar_comentario($tar_id);
$dni = $_SESSION['S_DNI_PT'];

$contenido = "";
if (count($respuesta) > 0) {
    for ($i = 0; $i < count($respuesta); $i++) {
        if ($respuesta[$i]['usua_dni'] != $dni) {

            $contenido .= '<!-- Message. Default to the left -->
                    <div class="direct-chat-msg" >
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">' . $respuesta[$i]['nombre'] . '</span>
                                <span class="direct-chat-timestamp float-right">' . $respuesta[$i]['fecha_chat'] . '</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="../../images/avatar4.png" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text";">
                                ' . $respuesta[$i]['come_come'] . '
                            </div>
                         <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->';
        } else {
            $contenido .= '<div class="direct-chat-msg right">
                         <div class="direct-chat-infos clearfix">
                             <span class="direct-chat-name float-right">' . $respuesta[$i]['nombre'] . '</span>
                             <span class="direct-chat-timestamp float-left">' . $respuesta[$i]['fecha_chat'] . '</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="../../images/avatar4.png" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text"  style="background-color: #17a2b8 !important; border-color:#17a2b8 !important;">
                        <style>
                        .direct-chat-danger .right>.direct-chat-text::after, .direct-chat-danger .right>.direct-chat-text::before {
                            border-left-color: #17a2b8 !important;
                        }
                       </style> 
                        ' . $respuesta[$i]['come_come'] . '
                        </div>
                        <!-- /.direct-chat-text -->
                        </div>';
        }
    }
    echo $contenido;
}

/*
if (count($respuesta) > 0) {
    echo json_encode($respuesta);
} else {
    echo '{
        "sEcho": 1,
        "iTotalRecords":"0",
        "iTotalDisplayRecords":"0",
        "aaData":[]
    }';
}*/
