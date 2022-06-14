<?php
session_start();
include "headAlg.php";

?>

<div style=" padding: 5% 20% 10% 20%">
<h1>Método de Cuadrados medios</h1>
<div class="row no-gutters">
    <div class="col-12 col-sm-6 col-md-8">
    <form method="GET" action="cuadrados.php" class="needs-validation" >
    <div class="form-row">
        <div class="col-md-8 mb-3">
        <label for="validationCustom01">Semilla \( X_0 \): </label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Semilla" value="" name="semilla" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-8 mb-3">
        <label for="validationCustom02">Digitos \( D \):</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Digitos" value="" name="dig" required>
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
    Fue propuesto por el año 1940 por los matemáticos John Von
Neuman y Nicholas Metropolis.
    <br>
    El método comienza con un número llamado semilla \(X_0\) de \(2n\) cifras, y al elevarlo al cuadrado
resulta un número de hasta \(4n\) cifras, y se selecciona los D dígitos del centro; y es el primer
número generado, y se sigue el mismo procedimiento hasta obtener n números generados. El
número de dígitos debe ser mayor a \(3 (d > 3)\).

    </div>
</body>