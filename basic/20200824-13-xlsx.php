 <?php

    require '../vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Hello World !')
        ->setCellValue('C3', 'Hello PY!');

    $writer = new Xlsx($spreadsheet);
    $writer->save('hello world.xlsx');

    ?>