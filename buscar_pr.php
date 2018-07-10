<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="estilos.css" rel="stylesheet">
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
					WHERE nombre like '%$termino%'";

		//Ejecutamos la consulta
					$buscar_ej = mysqli_query (
								$conexion,
								$buscar);

					if($buscar == false){
						echo "error en SQL";
					} else {
						//echo "todo esta ok";}
         // muestra resultados
						
						$reg = mysqli_fetch_array ($buscar_ej);
 						echo $reg['nombre']. " ". $reg['apellido'] . " ". $reg['mail'] . " ". $reg['edad'] . " " . $reg['ocupacion'];
						}
		?>
	</body>
</html>