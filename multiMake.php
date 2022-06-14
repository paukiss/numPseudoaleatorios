<?php
session_start();
include "headAlg.php";

?>

<div style=" padding: 5% 15% 10% 15%">
<h1>Congruencial Multiplicativo</h1>
<div class="row no-gutters">
    <div class="col-10 col-sm-6 col-md-4">
    <form method="GET" action="multi.php" class="needs-validation" >
    <div class="form-row">
        <div class="col-md-8 mb-3">
        <label for="validationCustom01">Semilla \( X_0  \): </label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Semilla" value="" name="semilla" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-8 mb-3">
        <label for="validationCustom02">Multiplicador \(a \):</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Digitos" value="" name="mult" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        
        <div class="col-md-8 mb-3">
        <label for="validationCustom02">Módulo \((mod)\):</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Digitos" value="" name="mod" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-8 mb-3">
        <label for="validationCustom02">Cantidad de Numeros Pseudoaleatorios:</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Cantidad" value="" name="cant" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
    
    </div>

    <button class="btn btn-primary" type="submit">Generar Numeros</button>
    </form>
    </div>

    <div class="col-6 col-md-8">
    Al igual que el generador congruencial mixo, el generador
congruencial muliplicativo determina el próximo número pseudoaleatorio a partir del último
número generado, de acuerdo a la siguiente relación de recurrencia.
    $$X_{n+1} = a X_n \mod m$$
    Se recomienda seleccionar adecuadamente los valores de los parámetros \(a\), \(x_0\), y \(m\) con la
finalidad de asegurar un período máximo para las sucesiones generadas por este método. Se
puede trabajar en el sistema decimal o en el sistema binario.
    <br>
    Reglas para seleccionar los valores \(a\), \(x_0\), y \(m\):
    <ol>
        <li>El valor de la semilla puede ser cualquier entero no divisible por 2 ó 5, y deben ser relativamente primo a m</li>
        <li>El valor seleccionado de a, debe ser obtenido de acuerdo a la siguiente identidad:
            \[a = 200t ± p\]
            <ul>    
                <li>\(t\): cualquier entero</li>
                <li>\(p\) = 3,11,13,19,21,27,29,37,53,59,61,67,69,77,83,91 </li> 
            </ul>
        </li>
        <li>El valor de \(m\) puede ser \(10^d\)</li>
    </ol>
 
    </div>
</body>