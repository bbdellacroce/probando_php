<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Resultados de busqueda</title>
	</head>
	<body>
		<h1>Resultados de busqueda</h1>
		
		<?php
			//conseguimos el termino de busqueda
		$termino = $_GET['termino'];

		//Conectamos a la bd
		include("conexion.php");


		//Reaizamos la consulta
		$buscar = "SELECT * FROM usuarios 
					WHERE ocupacion like '%$termino%'";

		//Ejecutamos la consulta
					$buscar_ej = mysqli_query (
								$conexion,
								$buscar);

					if($buscar == false){
						echo "error en SQL";
					} else {
						//echo "todo esta ok";}
         // cuenta las filas
						$cant = mysqli_num_rows ($buscar_ej);
						echo "tenes: $cant ";}
		?>
	</body>
</html>