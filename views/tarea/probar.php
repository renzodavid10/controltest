<?php
function obtener_subdirectorio_actual()
{
    $url_actual = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url_base = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'];
    $subdirectorio = str_replace($url_base, '', $url_actual);
    $subdirectorio = explode("/", $subdirectorio)[1];
    return $subdirectorio;
}

$subdirectorio_actual = obtener_subdirectorio_actual();
echo "El subdirectorio actual es: " . $subdirectorio_actual;
