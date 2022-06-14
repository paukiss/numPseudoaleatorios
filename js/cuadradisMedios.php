<?php

function generarCSV($arreglo, $ruta, $delimitador, $encapsulador){
    $file_handle = fopen($ruta, 'w');
    fputcsv($file_handle, array("id", "x_n", "x_n_2", "x_n1", "mu_n"));
    foreach ($arreglo as $linea) {
      fputcsv($file_handle, $linea);
    }
    rewind($file_handle);
    fclose($file_handle);
  }

function createData($id, $x_n, $x_n_2, $x_n1, $mu_n) {
    return array("id" => $id, "x_n" => $x_n, "x_n_2" => $x_n_2, "x_n1" => $x_n1, "mu_n" => $mu_n);
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

function generarNum($x_0, $d, $cont)
{
    $num = array();
    for ($i=0; $i < $cont; $i++) {
        if ($i == 0)
            $new_num = pow($x_0, 2);
        else
        {
            $new_num = pow($num[$i - 1]['x_n1'], 2);
            $x_0 = $num[$i - 1]['x_n1'];
        }
        $only_mid = midNumber($new_num, $d);
        $dec = $only_mid / pow(10,$d);
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