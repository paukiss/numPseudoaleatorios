<?php
session_start();
$semilla=$_GET["semilla"];
$dig = $_GET["dig"];
$cant = $_GET["cant"];

include "head.php";
include "js/cuadradisMedios.php"



?>

<script>
	$(document).ready( function () {
	var table = $('#table1').DataTable();
	} );
</script>

<div class="d-flex justify-content-around">
  <div class="p-2">
	  <h1 class="text-slim text-default">Generación de Números Pseudoaleatorios </h1>
  </div>
  
	<div class="p-2">
        <a href="index.php" style="background-color: red; padding: 10px 10px; margin-top: 50px;">Volver</a>
	</div>
</div>
<div class="container">
	<!-- table class=table -->
	<table id="table1" class="table table-bordered table-striped">
	<thead>
		<tr>	
			<th scope="col">$${ID}$$</th>
			<th scope="col">$${X_n}$$</th>
			<th scope="col">$${X_n^2}$$</th>
			<th scope="col">$${X_{n+1}}$$</th>	
			<th scope="col">$${\mu_u}$$</th>
			<!-- <th scope="col">Accion</th> -->
		</tr>
	</thead>
	<tbody>
		<?php
		$fila = generarNum($semilla, $dig, $cant);
		for ($i=0; $i < $cant; $i++){
			echo "<tr>";
				echo "<th style='text-align:center' scope='row'>".$fila[$i]["id"]."</th>";
				// echo "<td>".$fila[$i]["x_n"]."</td>";
				echo "<td style='text-align:center'>".$fila[$i]["x_n"]."</td>";
				echo "<td style='text-align:center'>".$fila[$i]["x_n_2"]."</td>";
				echo "<td style='text-align:center'>".$fila[$i]["x_n1"]."</td>";
				echo "<td style='text-align:center'>".$fila[$i]["mu_n"]."</td>";
			// echo "<td><a href='motor.php?flujo=123"."'>Ver</a></td>";
			echo "</tr>";	
		}	
		?>
		</tbody>
	</table>
</div>

<div class="d-flex justify-content-center">
  <div class="p-2">
	  <a href="file.csv">Descargar Archivo CSV</a>
  </div>
  
  
</div>


<?php
	include("foot.php");
?>