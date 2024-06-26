<?php

require '../../../excel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generateExcel'])) {
    // Obtener el ID enviado desde JavaScript
    $id = isset($_POST['id']) ? $_POST['id'] : null;



    // Crear una instancia de Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('MEMORIA DE CALCULO');

    //Casula de datos  $data->
    $data = json_decode($id);


    // Desactivar cuadrículas
    $spreadsheet->getActiveSheet()->setShowGridlines(false);

    // Definir el estilo del borde grueso
    $styleThickBorder = [
        'borders' => [
            'outline' => [
                'borderStyle' => Border::BORDER_THICK,
                'color' => ['argb' => '00000000'],
            ],
        ],
    ];

    // Definir el estilo del borde delgado
    $styleThinBorder = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
                'color' => ['argb' => '00000000'],
            ],
        ],
    ];

    // Definir estilo de celdas con relleno de color
    $styleHeaderFill = [
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'color' => ['argb' => 'FFD9EAD3']
        ]
    ];

    $styleSubHeaderFill = [
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'color' => ['argb' => 'FFFCE5CD']
        ]
    ];

    // Encabezado principal con imagen
    $sheet->mergeCells('A1:J1');
    $sheet->setCellValue('A1', 'CALCULATION REPORT (MC-TIP)')
          ->mergeCells('A1:J1')
          ->getStyle('A1')->getFont()->setBold(true);
    $sheet->setCellValue('A2', 'Bogotá D.C. - Colombia - South América')
          ->mergeCells('A2:J2');
    $sheet->setCellValue('A3', 'www.heptaproyectos.com')
          ->mergeCells('A3:H3')
          ->getStyle('A3')->getFont()->getColor()->setARGB('FFFF9900');

    // Alinear el texto
    $sheet->getStyle('A1:J3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    $sheet->getStyle('A1:J3')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

    // Ajustar la altura de las filas para que el texto se vea completo
    $sheet->getRowDimension('1')->setRowHeight(15);
    $sheet->getRowDimension('2')->setRowHeight(15);
    $sheet->getRowDimension('3')->setRowHeight(15);

    // Agregar imagen
    $drawing = new Drawing();
    $drawing->setName('Logo');
    $drawing->setDescription('Logo');
    $drawing->setPath('../../dist/img/imgExcel/logo.jpeg'); // Reemplaza con la ruta a tu logo
    $drawing->setHeight(60); // Altura de la imagen en píxeles (1.21 cm = 34 px)
    $drawing->setWidth(134); // Ancho de la imagen en píxeles (4.39 cm = 124 px)
    $drawing->setCoordinates('J1');
    $drawing->setOffsetX(-100);
    $drawing->setOffsetY(5);
    $drawing->setWorksheet($spreadsheet->getActiveSheet());

    // Primera sección
    $sheet->setCellValue('A5', 'Document No.:')
          ->setCellValue('B5', 'MC-TIP-XXXX-XXX_0X_XXX')
          ->mergeCells('B5:D5');
    $sheet->setCellValue('E5', 'Project:')
          ->mergeCells('E5:F5')
          ->setCellValue('G5', 'XXX')
          ->mergeCells('G5:J5');

    $sheet->setCellValue('A6', 'Project No.:')
          ->setCellValue('B6', 'HTA-XXX')
          ->mergeCells('B6:D6');
    $sheet->setCellValue('E6', 'Title:')
          ->mergeCells('E6:F6')
          ->setCellValue('G6', "Airslide capacity calculation")
          ->mergeCells('G6:J6')
          ->getStyle('G6')->getAlignment()->setWrapText(true);

    $sheet->setCellValue('A7', 'Department:')
          ->setCellValue('B7', 'Process')
          ->mergeCells('B7:D7');
    $sheet->setCellValue('E7', 'Location:')
          ->mergeCells('E7:F7')
          ->setCellValue('G7', $data->PlantName .' – '. $data->pais_nombre_es)
          ->mergeCells('G7:I7');
    $sheet->setCellValue('J7', 'Rev. 0X');

    $sheet->setCellValue('A8', 'Date:')
          ->setCellValue('B8', 'XX-XXXX-XX')
          ->mergeCells('B8:D8');

    // Aplicar el estilo del borde delgado
    $sheet->getStyle('A5:J8')->applyFromArray($styleThinBorder);

    // Segunda sección: Engineer details
    $sheet->setCellValue('A10', 'Designer M.P.:')
          ->setCellValue('B10', 'Nombre')
          ->mergeCells('B10:E10');
    $sheet->setCellValue('F10', 'No. Professional card')
          ->setCellValue('G10', 'Date')
          ->mergeCells('G10:J10');

    $sheet->setCellValue('A11', 'Reviser M.P.:')
          ->setCellValue('B11', 'Nombre')
          ->mergeCells('B11:E11');
    $sheet->setCellValue('F11', 'No. Professional card')
          ->setCellValue('G11', 'Date')
          ->mergeCells('G11:J11');

    $sheet->setCellValue('A12', 'Engineering Coordinator')
          ->setCellValue('B12', 'Nombre')
          ->mergeCells('B12:E12');
    $sheet->setCellValue('G12', 'Date')
          ->mergeCells('G12:J12');

    $sheet->setCellValue('A13', 'Approved - Client')
          ->mergeCells('A13:E13');

    // Tercera sección: Document Review
    $sheet->setCellValue('A15', 'Document Review')
          ->mergeCells('A15:C15');
    $sheet->setCellValue('D15', 'Review Description')
          ->mergeCells('D15:F15');
    $sheet->setCellValue('G15', 'Date')
          ->mergeCells('G15:J15');

    $sheet->setCellValue('A16', 'Rev. 0X')
          ->mergeCells('A16:C16');
    $sheet->setCellValue('D16', 'Preliminary / Update / Etc')
          ->mergeCells('D16:F16');
    $sheet->setCellValue('G16', 'Date')
          ->mergeCells('G16:J16');

    $sheet->setCellValue('A17', 'Rev. 0X')
          ->mergeCells('A17:C17');
    $sheet->setCellValue('D17', 'Preliminary / Update / Etc')
          ->mergeCells('D17:F17');
    $sheet->setCellValue('G17', 'Date')
          ->mergeCells('G17:J17');

    $sheet->setCellValue('A18', 'Rev. 0X')
          ->mergeCells('A18:C18');
    $sheet->setCellValue('D18', 'Preliminary / Update / Etc')
          ->mergeCells('D18:F18');
    $sheet->setCellValue('G18', 'Date')
          ->mergeCells('G18:J18');

    // Cuarta sección: Standards and Bibliography
    $sheet->setCellValue('A20', 'STANDARDS AND BIBLIOGRAPHY')
          ->mergeCells('A20:J20');

    // Fila vacía con borde
    $sheet->mergeCells('A21:J21');
    $sheet->getStyle('A21:J21')->applyFromArray($styleThinBorder);

    $sheet->setCellValue('A22', 'Description')
          ->mergeCells('A22:E22')
          ->getStyle('A22')->getFont()->setBold(true);
    $sheet->setCellValue('F22', 'Application')
          ->mergeCells('F22:J22')
          ->getStyle('F22')->getFont()->setBold(true);

    $sheet->setCellValue('A23', "Design criteria No. CRTIM14601-13900\nMechanical criteria\nAirsildes (Pneumatic gravity conveyor)")
          ->mergeCells('A23:E25')
          ->getStyle('A23')->getAlignment()->setWrapText(true);
    $sheet->setCellValue('F23', 'Reference for calculation airslide')
          ->mergeCells('F23:J25')
          ->getStyle('F23')->getAlignment()->setWrapText(true);

    // Centrar el texto en las celdas combinadas
    $sheet->getStyle('A22:E22')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('A22:E22')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    $sheet->getStyle('F22:J22')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('F22:J22')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    $sheet->getStyle('A23:E25')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('A23:E25')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    $sheet->getStyle('F23:J25')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('F23:J25')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

    // Ajustar la altura de las filas para que el texto se vea completo
    $sheet->getRowDimension('23')->setRowHeight(-1);
    $sheet->getRowDimension('24')->setRowHeight(-1);
    $sheet->getRowDimension('25')->setRowHeight(-1);

    // Aplicar borde grueso a la tabla "STANDARDS AND BIBLIOGRAPHY"
    $sheet->getStyle('A20:J25')->applyFromArray($styleThickBorder);

    // Mostrar cuadrícula en la fila de los títulos
    $sheet->getStyle('A22:J22')->applyFromArray($styleThinBorder);

    // Quinta sección: Summary
    $sheet->setCellValue('A27', 'SUMMARY')
          ->mergeCells('A27:J27');

    $sheet->setCellValue('A28', 'The objective of this report is to present the analysis of')
          ->mergeCells('A28:F28');
    $sheet->setCellValue('G28', 'Airslide capacity calculation')
          ->mergeCells('G28:J28');

    $sheet->setCellValue('A29', 'Airslide (XXX-XX-416-XX)')
          ->mergeCells('A29:F29');
    $sheet->setCellValue('G29', 'Fan (XXX-XX-321-XX)')
          ->mergeCells('G29:J29');

    $sheet->setCellValue('A30', 'located at the')
          ->mergeCells('A30:F30');
    $sheet->setCellValue('G30', $data->PlantName .' – '. $data->pais_nombre_es)
          ->mergeCells('G30:J30');

    // Sexta sección: Background
    $sheet->setCellValue('A32', 'BACKGROUND')
          ->mergeCells('A32:J32');

    $sheet->setCellValue('A33', 'Plant conditions')
          ->mergeCells('A33:J33');

    $sheet->setCellValue('A34', 'Location')
          ->mergeCells('A34:B34');
    $sheet->setCellValue('C34', $data->PlantName .' – '. $data->pais_nombre_es)
          ->mergeCells('C34:J34');

    $sheet->setCellValue('A35', 'Height Above Sea Level')
          ->mergeCells('A35:B35');
    $sheet->setCellValue('C35', $data->PlantElevación) // Updated value
          ->mergeCells('C35:D35');
    $sheet->setCellValue('E35', 'm')
          ->mergeCells('E35:F35');
    $sheet->setCellValue('G35', '0') // Updated value
          ->mergeCells('G35:H35');
    $sheet->setCellValue('I35', 'ft')
          ->mergeCells('I35:J35');

    $sheet->setCellValue('A36', 'Minimum Ambient Temperature')
          ->mergeCells('A36:B36');
    $sheet->setCellValue('C36', $data->temperaturaMinC_planta) // Updated value
          ->mergeCells('C36:D36');
    $sheet->setCellValue('E36', '°C')
          ->mergeCells('E36:F36');
    $sheet->setCellValue('G36', $data->temperaturaMinF_planta) // Updated value
          ->mergeCells('G36:H36');
    $sheet->setCellValue('I36', '°F')
          ->mergeCells('I36:J36');

    $sheet->setCellValue('A37', 'Maximum Ambient Temperature')
          ->mergeCells('A37:B37');
    $sheet->setCellValue('C37', $data->temperaturaMaxC_planta) // Updated value
          ->mergeCells('C37:D37');
    $sheet->setCellValue('E37', '°C')
          ->mergeCells('E37:F37');
    $sheet->setCellValue('G37', $data->temperaturaMaxF_planta) // Updated value
          ->mergeCells('G37:H37');
    $sheet->setCellValue('I37', '°F')
          ->mergeCells('I37:J37');

    $sheet->setCellValue('A38', 'Atmospheric pressure')
          ->mergeCells('A38:B38');
    $sheet->setCellValue('C38', $data->AtmosphericPressure_mbar) // Updated value
          ->mergeCells('C38:D38');
    $sheet->setCellValue('E38', 'mbar')
          ->mergeCells('E38:F38');
    $sheet->setCellValue('G38', $data->AtmosphericPressure_psi) // Updated value
          ->mergeCells('G38:H38');
    $sheet->setCellValue('I38', 'psia')
          ->mergeCells('I38:J38');


    // Séptima sección: Normal Conditions and Standard Conditions
    $sheet->setCellValue('A40', 'Normal Conditions and Standard Conditions')
          ->mergeCells('A40:J40');

    // Normal Conditions Table
    $sheet->setCellValue('A41', 'Normal Conditions')
          ->mergeCells('A41:E41');
    $sheet->setCellValue('A42', 'In accordance with DIN 1343 standard')
          ->mergeCells('A42:E42');

    $sheet->setCellValue('A43', 'Temperature')
          ->mergeCells('A43:B43')
          ->getStyle('A43')->getFont()->setBold(true);
    $sheet->setCellValue('C43', '0')
          ->mergeCells('C43:D43');
    $sheet->setCellValue('E43', '°C');

    $sheet->setCellValue('A44', '')
          ->mergeCells('A44:B44');
    $sheet->setCellValue('C44', '273,15')
          ->mergeCells('C44:D44');
    $sheet->setCellValue('E44', 'K');

    $sheet->setCellValue('A45', 'Pressure')
          ->mergeCells('A45:B45')
          ->getStyle('A45')->getFont()->setBold(true);
    $sheet->setCellValue('C45', '1.01')
          ->mergeCells('C45:D45');
    $sheet->setCellValue('E45', 'Bar');

    $sheet->setCellValue('A46', '')
          ->mergeCells('A46:B46');
    $sheet->setCellValue('C46', '101.33')
          ->mergeCells('C46:D46');
    $sheet->setCellValue('E46', 'KPa');

    $sheet->setCellValue('A47', 'Relative humidity')
          ->mergeCells('A47:B47')
          ->getStyle('A47')->getFont()->setBold(true);
    $sheet->setCellValue('C47', '0')
          ->mergeCells('C47:D47');
    $sheet->setCellValue('E47', '%');

    // Standard Conditions Table
    $sheet->setCellValue('F41', 'Standard Conditions')
          ->mergeCells('F41:J41');
    $sheet->setCellValue('F42', 'In accordance with ISO 2533 standard')
          ->mergeCells('F42:J42');

    $sheet->setCellValue('F43', 'Temperature')
          ->mergeCells('F43:G43')
          ->getStyle('F43')->getFont()->setBold(true);
    $sheet->setCellValue('H43', '15')
          ->mergeCells('H43:I43');
    $sheet->setCellValue('J43', '°C');

    $sheet->setCellValue('F44', '')
          ->mergeCells('F44:G44');
    $sheet->setCellValue('H44', '288.15')
          ->mergeCells('H44:I44');
    $sheet->setCellValue('J44', 'K');

    $sheet->setCellValue('F45', 'Pressure')
          ->mergeCells('F45:G45')
          ->getStyle('F45')->getFont()->setBold(true);
    $sheet->setCellValue('H45', '1.01')
          ->mergeCells('H45:I45');
    $sheet->setCellValue('J45', 'Bar');

    $sheet->setCellValue('F46', '')
          ->mergeCells('F46:G46');
    $sheet->setCellValue('H46', '101.33')
          ->mergeCells('H46:I46');
    $sheet->setCellValue('J46', 'KPa');

    $sheet->setCellValue('F47', 'Relative humidity')
          ->mergeCells('F47:G47')
          ->getStyle('F47')->getFont()->setBold(true);
    $sheet->setCellValue('H47', '0')
          ->mergeCells('H47:I47');
    $sheet->setCellValue('J47', '%');

    // Aplicar borde grueso a las tablas de condiciones
    $sheet->getStyle('A41:E47')->applyFromArray($styleThickBorder);
    $sheet->getStyle('F41:J47')->applyFromArray($styleThickBorder);

    // Aplicar bordes delgados a las celdas de las tablas
    $sheet->getStyle('A43:E47')->applyFromArray($styleThinBorder);
    $sheet->getStyle('F43:J47')->applyFromArray($styleThinBorder);

    // Centrar el texto en las celdas
    $sheet->getStyle('A41:E47')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('A41:E47')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    $sheet->getStyle('F41:J47')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('F41:J47')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

    // Octava sección: Result
    $sheet->setCellValue('A49', 'RESULT')
          ->mergeCells('A49:J49');

    $sheet->setCellValue('A50', 'AIRSLIDE')
          ->mergeCells('A50:E50')
          ->getStyle('A50')->getFont()->setBold(true);
    $sheet->setCellValue('F50', 'FAN')
          ->mergeCells('F50:J50')
          ->getStyle('F50')->getFont()->setBold(true);

    // Centrar los títulos
    $sheet->getStyle('A50:E50')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('F50:J50')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

    // Agregar fila en blanco debajo de los títulos
    $sheet->setCellValue('A51', '')
          ->mergeCells('A51:E51');
    $sheet->setCellValue('F51', '')
          ->mergeCells('F51:J51');

    // Aplicar el estilo del borde delgado a la fila en blanco
    $sheet->getStyle('A51:E51')->applyFromArray($styleThinBorder);
    $sheet->getStyle('F51:J51')->applyFromArray($styleThinBorder);

    // AERODESLIZADOR
    $sheet->setCellValue('A52', 'O.C.')
          ->mergeCells('A52:A52')
          ->getStyle('A52')->getFont()->setBold(true);
    $sheet->setCellValue('B52', $data->capacidadAerodeslizador_capacidad_operacion_stph);
    $sheet->setCellValue('C52', 'stph');
    $sheet->setCellValue('D52', $data->capacidadAerodeslizador_capacidad_operacion_tph);
    $sheet->setCellValue('E52', 'tph');

    $sheet->setCellValue('A53', 'D.C.')
          ->mergeCells('A53:A53')
          ->getStyle('A53')->getFont()->setBold(true);
    $sheet->setCellValue('B53', $data->capacidadAerodeslizador_capacidad_diseño_stph);
    $sheet->setCellValue('C53', 'stph');
    $sheet->setCellValue('D53', $data->capacidadAerodeslizador_capacidad_diseño_tph);
    $sheet->setCellValue('E53', 'tph');

    $sheet->setCellValue('A54', 'MAT. DENS.')
          ->mergeCells('A54:A54')
          ->getStyle('A54')->getFont()->setBold(true);
    $sheet->setCellValue('B54', $data->densidad_aireado_lb_ft3);
    $sheet->setCellValue('C54', 'lb/ft3');
    $sheet->setCellValue('D54', $data->densidad_aireado_kg_m3);
    $sheet->setCellValue('E54', 'kg/m3');

    $sheet->setCellValue('A55', 'WIDTH')
          ->mergeCells('A55:A55')
          ->getStyle('A55')->getFont()->setBold(true);
    $sheet->setCellValue('B55', $data->aerodeslizador_ancho_inches);
    $sheet->setCellValue('C55', 'inches');
    $sheet->setCellValue('D55', $data->aerodeslizador_ancho_mm);
    $sheet->setCellValue('E55', 'mm');

    $sheet->setCellValue('A56', 'LENGTH')
          ->mergeCells('A56:A56')
          ->getStyle('A56')->getFont()->setBold(true);
    $sheet->setCellValue('B56', $data->aerodeslizador_longitud_ft);
    $sheet->setCellValue('C56', 'ft');
    $sheet->setCellValue('D56', $data->aerodeslizador_longitud_m);
    $sheet->setCellValue('E56', 'm');

    $sheet->setCellValue('A57', 'INCLINATION')
          ->mergeCells('A57:A57')
          ->getStyle('A57')->getFont()->setBold(true);
    $sheet->setCellValue('B57', $data->aerodeslizador_inclinacion);
    $sheet->setCellValue('C57', '°');
    $sheet->setCellValue('D57', $data->aerodeslizador_inclinacion);
    $sheet->setCellValue('E57', '°');

    // VENTILADOR
    $sheet->setCellValue('F52', 'O.C.')
          ->mergeCells('F52:F52')
          ->getStyle('F52')->getFont()->setBold(true);
    $sheet->setCellValue('G52', $data->ventilador_capacidadOperacion_Acfm);
    $sheet->setCellValue('H52', 'Acfm');
    $sheet->setCellValue('I52', $data->ventilador_capacidadOperacion_Am3_h);
    $sheet->setCellValue('J52', 'Am³/h');

    $sheet->setCellValue('F53', 'PO.')
          ->mergeCells('F53:F53')
          ->getStyle('F53')->getFont()->setBold(true);
    $sheet->setCellValue('G53', $data->ventilador_potencia_hp);
    $sheet->setCellValue('H53', 'HP');
    $sheet->setCellValue('I53', $data->ventilador_potencia_kw);
    $sheet->setCellValue('J53', 'KW');

    $sheet->setCellValue('F54', 'TEMP.')
          ->mergeCells('F54:F54')
          ->getStyle('F54')->getFont()->setBold(true);
    $sheet->setCellValue('G54', $data->ventilador_temperatura_F);
    $sheet->setCellValue('H54', '°F');
    $sheet->setCellValue('I54', $data->ventilador_temperatura_C);
    $sheet->setCellValue('J54', '°C');

    $sheet->setCellValue('F55', 'P.D.')
          ->mergeCells('F55:F55')
          ->getStyle('F55')->getFont()->setBold(true);
    $sheet->setCellValue('G55', $data->ventilador_presionNanometrica_in_H2O);
    $sheet->setCellValue('H55', 'In H2O');
    $sheet->setCellValue('I55', $data->ventilador_presionNanometrica_mm_H2O);
    $sheet->setCellValue('J55', 'mm H2O');


    // Aplicar borde grueso a la tabla "RESULT"
    $sheet->getStyle('A49:J57')->applyFromArray($styleThickBorder);

    // Aplicar estilos de bordes y alineación
    $sheet->getStyle('A1:J3')->applyFromArray($styleThickBorder);
    $sheet->getStyle('A5:J8')->applyFromArray($styleThinBorder);
    $sheet->getStyle('A10:J18')->applyFromArray($styleThinBorder);
    $sheet->getStyle('A20:J25')->applyFromArray($styleThickBorder);
    $sheet->getStyle('A27:J30')->applyFromArray($styleThinBorder);
    $sheet->getStyle('A32:J38')->applyFromArray($styleThinBorder);
    $sheet->getStyle('A40:J47')->applyFromArray($styleThickBorder);
    $sheet->getStyle('A49:J57')->applyFromArray($styleThickBorder);

    // Aplicar relleno de color a los encabezados
    $sheet->getStyle('A20:J20')->applyFromArray($styleHeaderFill);
    $sheet->getStyle('A27:J27')->applyFromArray($styleHeaderFill);
    $sheet->getStyle('A32:J32')->applyFromArray($styleHeaderFill);
    $sheet->getStyle('A40:J40')->applyFromArray($styleHeaderFill);
    $sheet->getStyle('A49:J49')->applyFromArray($styleHeaderFill);

    // Ajustar el ancho de las columnas
    foreach (range('A', 'J') as $columnID) {
        $sheet->getColumnDimension($columnID)->setAutoSize(true);
    }

    // Guardar el archivo Excel temporalmente
    $tempFilePath = 'temp_excel.xlsx';
    $writer = new Xlsx($spreadsheet);
    $writer->save($tempFilePath);

    // Configurar cabeceras para la descarga del archivo
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="replica_diseno.xlsx"');
    header('Cache-Control: max-age=0');

    // Leer el archivo y enviarlo como respuesta
    readfile($tempFilePath);

    // Eliminar el archivo temporal después de enviarlo
    unlink($tempFilePath);
    exit;
}

// Si no se recibió la solicitud POST correcta, mostrar un mensaje de error
echo json_encode(['success' => false, 'message' => 'Solicitud incorrecta']);
exit;

?>