<?php
session_start();
$semilla=$_GET["semilla"];
$mul = $_GET["mult"];
$mod = $_GET["mod"];
$cant = $_GET["cant"];
include "head.php";
include "js/congruMulti.php"



?>

<script>
	$(document).ready( function () {
	var table = $('#table1').DataTable();
	} );
</script>

<div class="d-flex justify-content-around">
  <div class="p-2">
	  <h1 class="text-slim text-default">Congruencial Multiplicativo </h1>
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
			<th scope="col">$${N}$$</th>
			<th scope="col">$${X_{n}  = a * X_n \mod m}$$</th>
			<!-- <th scope="col">Accion</th> -->
		</tr>
	</thead>
	<tbody>
		<?php
		$fila = generarNum($semilla, $mul, $mod, $cant);
		for ($i=1; $i < $cant; $i++){
			echo "<tr>";
				echo "<th style='text-align:center' scope='row'>".$fila[$i]["n"]."</th>";
				echo "<td style='text-align:center'>".$fila[$i]["x_n"]."</td>";
				// echo "<td style='text-align:center'> \(".strval($mul)."*(".strval($fila[$i]["x_n"]).") \mod ".strval($mod)." = ".$fila[$i]["x_n1"]."\)</td>";
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