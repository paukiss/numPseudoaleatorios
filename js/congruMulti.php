<?php

function generarCSV($arreglo, $ruta, $delimitador, $encapsulador){
    $file_handle = fopen($ruta, 'w');
    fputcsv($file_handle, array("n", "x_n", "x_(n+1)"));
    foreach ($arreglo as $linea) {
        fputcsv($file_handle, $linea);
    }
    rewind($file_handle);
    fclose($file_handle);
}

function createData($id, $x_n, $x_n1) {
    return array("n" => $id, "x_n" => $x_n, "x_n1" => $x_n1);
}

function generarNum($x_0, $a, $m, $cont)
{
    $num = array();
    for ($i=0; $i < $cont ; $i++) {
        if ($i == 0)
            $new_num = $x_0;
        else
        {
            $new_num = ($a * $num[$i - 1]['x_n1']);
            $x_0 = $num[$i - 1]['x_n1'];
        }
        $only_mid = $new_num % $m;
        $dec = $only_mid / $m;
        array_push($num, createData($i-1, $x_0, $only_mid));
    } 
    $ruta = "file.csv";
    generarCSV($num, $ruta, $delimitador = ';', $encapsulador = '"');
    return $num;
}

?>