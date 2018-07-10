<?php

	//conexion con la base de datos
	//1.servidor ->localhost
	//2. nombre de usuario
	//3.contraeña
	//nombre de la base de datos


$conexion = mysqli_connect("localhost", "root", "", "usuarios")
	//funcion de escape por si surge algun error interno.
	//or die("problemas de conexion con el servidor"); -> mensaje fijo.
	or die(mysqli_error($conexion));
	//esta fuincion comprende el error y lo informa en detalle

$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$mail= $_POST["mail"];
$edad= $_POST["edad"];
$ocupacion= $_POST["ocupacion"];
//myswli_connect -> establecer conexion con la bd
//mysqli_query -> SELECT, DELETE, UPDATE, INSERT
//recibe dos parametros:
	//1. Link de conexion  2. consulta que vamos a hacer a la tabla

//hago la consulta
/*$duplicado = "SELECT * FROM datos 
					WHERE apellido like '$apellido'";

//Ejecuto la consulta de arriba
					$duplicado_ej = mysqli_query (
								$conexion,
								$duplicado);
		
//le pido que cuente entre sus filas al menos una coincidencia
$cant = mysqli_num_rows ($duplicado_ej);
						if($cant == 1) {
							echo "<script type='text/javascript'>  alert('¡ya estas suscripto!'); </script>";}
							else {
*/
//INSERT INTO 
$suscripcion = mysqli_query($conexion, "INSERT INTO usuarios (nombre,apellido,mail,edad,ocupacion) values('$nombre','$apellido','$mail','$edad','$ocupacion')")
or die(mysqli_error($conexion));

if($suscripcion == TRUE) {
	echo "¡Gracias"; 
}else{
	echo "¡No pudimos ingresar tu info";}

?>