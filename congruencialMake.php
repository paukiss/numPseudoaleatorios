<?php
session_start();
include "headAlg.php";

?>

<div style=" padding: 5% 20% 10% 20%">
<h1>Congruencial Mixto</h1>
<div class="row no-gutters">
    <div class="col-12 col-sm-6 col-md-8">
    <form method="GET" action="congruencial.php" class="needs-validation" >
    <div class="form-row">
        <div class="col-md-8 mb-3">
        <label for="validationCustom01">Semilla \( X_0 > 0 \): </label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Semilla" value="" name="semilla" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-8 mb-3">
        <label for="validationCustom02">Multiplicador \(a > 0\):</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Digitos" value="" name="mult" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-8 mb-3">
        <label for="validationCustom02">Constante \(c > 0\):</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Digitos" value="" name="const" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-8 mb-3">
        <label for="validationCustom02">Módulo \((m > X_0 , m > a, m > c)\):</label>
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
    <h2>Métodos Congruenciales </h2>
     Los generadores de números pseudoaleatorios más utilizados en la
actualidad, se llaman generadores congruenciales lineales, las mismas fueron introducidas por
Lehmer 1951. Los métodos congruenciales más conocidos son:
    <ul>
        <li>Congruencial mixto</li>
        <li>Congruencial multiplicativo</li>
    </ul>
    El método congruencial mixto, comienza con un valor inicial (semilla)
\(X_0\) ; y los sucesivos números pseudoaleatorios \(X_{n+1}\) , se derivan a partir de la semilla; este
proceso es recursivo, y la fórmula es la siguiente:

    </div>
</body>