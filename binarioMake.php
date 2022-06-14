<?php
session_start();
include "headAlg.php";

?>

<div style=" padding: 5% 20% 10% 20%">
<h1>Sistema binario</h1>
<div class="row no-gutters">
    <div class="col-12 col-sm-6 col-md-8">
    <form method="GET" action="binario.php" class="needs-validation" >
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

    <div class="col-6 col-md-4">
     En un sistema binario los parámetros deben ser seleccionados de acuerdo a los siguientes criterios:
    <ol>
        <li>El valor de la semilla puede ser cualquier número entero impar relativamente primo a m</li>
        <li>El valor seleccionado de \(a\) debe ser obtenido a partir de la siguiente expresión: \(a = 8t ± 3\) donde \(t\) es cualquier entero</li>
        <li>El valor seleccionado de \(m\) puede ser \(2^d\). Si \(m=2^d\) el período del generador es \(2^{d-2}\) ó \(m/4\)</li>
    </ol>
 
    </div>
</body>