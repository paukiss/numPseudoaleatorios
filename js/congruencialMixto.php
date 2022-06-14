<?php

function generarCSV($arreglo, $ruta, $delimitador, $encapsulador){
    $file_handle = fopen($ruta, 'w');
    fputcsv($file_handle, array("n", "x_n", "a * x_n + mod", "x_(n+1)", "num uniformes"));
    foreach ($arreglo as $linea) {
        fputcsv($file_handle, $linea);
    }
    rewind($file_handle);
    fclose($file_handle);
}

function createData($id, $x_n, $a_x_c, $x_n1, $num_unif) {
    return array("n" => $id, "x_n" => $x_n, "aMod" => $a_x_c, "x_n1" => $x_n1, "unif" => $num_unif);
}

function midNumber($num, $d)
{
    $total = strlen(strval($num)) - $d;
    $l = floor($total / 2);
    $r = floor($total / 2);
    if ($total & 1)
        $r = $r + 1;

    while ($r > 0)
    {
        $num = floor($num / 10);
        $r = $r - 1;
    }
    
    $len = strlen(strval($num)) - 1;
    while ($l > 0)
    {
        $dec = pow(10, $len);
        $num = $num % $dec;
        $len = $len - 1;
        $l = $l - 1;
    }
    return $num;
}

function generarNum($x_0, $a, $c, $m, $cont)
{
    $num = array();

    for ($i=0; $i < $cont; $i++) {
        if ($i == 0)
            $new_num = ($a * $x_0 + $c);
        else
        {
            $new_num = ($a * $num[$i - 1]['x_n1'] + $c);
            $x_0 = $num[$i - 1]['x_n1'];
        }
        $only_mid = $new_num % $m;
        $dec = $only_mid / $m;

        array_push($num, createData($i, $x_0, $new_num, $only_mid, $dec));
    } 
    $ruta = "file.csv";
    generarCSV($num, $ruta, $delimitador = ';', $encapsulador = '"');
    return $num;
}


// $f = generarNum(3708, 4, 20);
// for ($i=0; $i < 20; $i++){
//     print_r($f[$i]);
//     echo "<br><br><br>";
// }
?>