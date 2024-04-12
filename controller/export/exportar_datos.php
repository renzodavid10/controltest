<?php
require '../../vendor/autoload.php';
require_once '../../model/model_tarea.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$MT = new model_tarea;
$resultado = $MT->listar_tarea('');


// Crear un nuevo objeto Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('TAREAS');
// Escribir los datos en la hoja de cálculo

//echo ($resultado);
foreach ($resultado as $primer) {

    foreach ($primer as $cabeza) {
        $cabecera = array_keys($cabeza);
        $col = 1;
        for ($i = 0; $i < count($cabecera); $i++) {
            $sheet->setCellValueByColumnAndRow($col, 1, $cabecera[$i]);
            $col++;
            // echo $cabecera[$i];
        }
        break;
    }
}

$row = 1;
foreach ($resultado as $primer) {
    foreach ($primer as $data) {
        $row++;
        $col = 1;
        //echo $row;
        foreach ($data as $contenido) {
            //echo $contenido . '<br>';
            $sheet->setCellValueByColumnAndRow($col, $row, $contenido);
            $col++;
            // echo $col;
        }
    }
}
/*while ($row_data = $resultado) {
    $col = 1;
    foreach ($row_data['data'] as $key => $value) {
        echo $value['tare_crea'];
        $sheet->setCellValueByColumnAndRow($col, $row, $value['tare_crea']);
        $col++;
    }
    $row++;
}*/
foreach (range(1, count($resultado['data'][0])) as $columnID) {
    $sheet->getColumnDimensionByColumn($columnID)->setAutoSize(true);
}

// Ajustar el texto en todas las celdas
$cellRange = $sheet->calculateWorksheetDimension();
$sheet->getStyle($cellRange)->getAlignment()->setWrapText(true);
// Crear un objeto Writer para guardar la hoja de cálculo en un archivo
//$writer = new Xlsx($spreadsheet);
//$writer->save('nombre_archivo.xlsx');

// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="myfile.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
//echo 'Archivo Excel generado exitosamente';
