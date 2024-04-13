<?php
//$uploads_dir = 'foto/';
$ruta = '../images/conversa/';
$ruta2 = '../../images/conversa/';
chmod($ruta2, 0777);
if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = basename($_FILES["file"]["name"]);
    move_uploaded_file($tmp_name, "../../images/conversa/$name");
    $url = "$ruta$name";
    echo json_encode(["url" => $url]);
} else {
    echo json_encode(["error" => "Error al cargar la imagen"]);
}
