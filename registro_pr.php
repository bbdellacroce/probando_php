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
$duplicado = "SELECT * FROM datos 
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

//INSERT INTO 
$suscripcion = mysqli_query($conexion, "INSERT INTO datos values('$nombre,$apellido,$mail,$edad,$ocupacion')")
or die(mysqli_error($conexion));

if($suscripcion == TRUE) {
	echo "<script type='text/javascript'>  alert('¡Gracias por suscribirte!'); </script>"; 
}else{
	echo "<script type='text/javascript'>  alert('¡No pudimos ingresar tu info :( '); </script>";
}}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Roller Lover</title>
		<meta charset="utf-8">
		<!-- mobile-->
		<script>
			if (screen.width<800) {
			   window.location.href="http://www.bifocal.com.ar/roller/mobile.html"; }
			</script>
		<!-- css-->
		<link rel="stylesheet" href="css/estilo.css">
		<script href="video.js" type="text/javascript"></script>

		<!-- favico-->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<!-- font-->
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee|Sedgwick+Ave+Display|Zilla+Slab+Highlight" rel="stylesheet"> 

		
		<!--key words  -->

		<meta name="keywords" content=" Rollers, patines, in-line, rollerblade, seba, freestyle, slalom, carrera, frame">
		<meta name="author" content="Roller lover">
		<meta name="description" content="Comunidad de deporte">

		<meta property="og:title" content="Roller lover">
		<meta property="og:type" content="http://www.bifocal.com.ar" >



	</head>
	<body>
<!-- LOGO --><div class="logo"></div>
			
<!-- VIDEO -->	<video poster="img/video_eagle.mp4" id="bgvid" playsinline autoplay muted loop>
					<source src="img/video_eagle.mp4" type="video">
					<source src="img/video_eagle.mp4" type="video/mp4">
				</video>
						<div id="polina">
							<h1>Roller Lover</h1><br>
							<h4>¿Cual es tu estilo?</h4><br>
<!-- BOTONERA -->
								<div class="botonera">
									<ul class="nav">
										<li><a href="#carrera">Carrera</a></li>
										<li><a href="#agressive">Agressive</a></li>
										<li><a href="#freestyle">Freestyle</a></li>
										<li><a href="#fitness">Fitness</a></li>
									</ul>
								</div>
						</div>
						<img id="flecha" src="img/flecha.png" alt="">
<!-- CONTEN -->	<div id="index">

<!-- ESTILOS -->
			  <div class="estilos">	<h2>/Estilos>></h2>			
				<div class="carrera" id="carrera"><h3>Carrera</h3>
						<div class="patin_info"><a href="modelos.php?modelo=CARRERA"><img src="img/race_rollers.png" alt=""></a></div>
						</div>

					<div class="agressive" id="agressive"><h3>Agressive</h3>
						<div class="patin_info"><a href="modelos.php?modelo=AGRESSIVE"><img src="img/agressive_rollers.png" alt=""></a></div>
						</div>

						<div class="freestyle" id="freestyle"><h3>Freestyle</h3><div class="patin_info" ><a href="modelos.php?modelo=FREESTYLE"><img src="img/slalom_rollers.png" alt=""></a></div>
						</div>

							<div class="fitness" id="fitness"><h3>Fitness</h3>
								<div class="patin_info"><a href="modelos.php?modelo=FITNESS"><img src="img/fitness_rollers.png" alt=""></a></div>
								</div>
				</div><!--FIN DE ESTILOS -->



<div class="destacado"><h2>/Destacados>></h2>
	<div id="callout"><strong>DESTACADO</strong></div>
		<button class="boton_destacado" onclick="plusDivs(-1)">&#10094;</button>
			<div style="width: 90%; float: left">
					<img class="mySlides" src="img/slider.jpg">
					<img class="mySlides" src="img/slider2.jpg">
					<img class="mySlides" src="img/slider3.jpg">
							</div>
				<button class="boton_destacado" onclick="plusDivs(+1)">&#10095;</button>

	</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


<!--MARCAS -->					<div class="marcas"><img src="img/marcas.jpg" alt=""></div>

<!-- TEAM -->
						<div class="team"><h2>/Equipo>></h2>
						
								<a href="team.php?team=Juan"><div class="profile">
									<div class="layer_opacity"><p>Juan Pelotas</p></div>
								</div></a>
								<a href="team.php?team=Tomas"><div class="profile">
									<div class="layer_opacity"><p>Tomas Cocacola</p></div>
								</div></a>
								<a href="team.php?team=Roberto"><div class="profile">
									<div class="layer_opacity"><p>Roberto Carlos</p></div>
								</div></a>
								<a href="team.php?team=Lorena"><div class="profile">
									<div class="layer_opacity"><p>Lorena Bobbit</p></div>
								</div></a>

								<a href="team.php?team=Guillermo"><div class="profile">
									<div class="layer_opacity"><p>Guillermo Abbiati</p></div>
								</div></a>
								<a href="team.php?team=Francesca"><div class="profile">
									<div class="layer_opacity"><p>Francesca Abbiati</p></div>
								</div></a>
								<a href="team.php?team=Rocio"><div class="profile">
									<div class="layer_opacity"><p>Rocio Vera</p></div>
								</div></a>
								<a href="team.php?team=Roxana"><div class="profile">
									<div class="layer_opacity"><p>Roxana Ucha</p></div>
								</div></a>

							</div>
<!--HISTORIA-->	
					<div class="historia"><h2>/Historia>></h2>
						
						<div class="article1">
							<img src="img/canada.jpg" alt=""><br>
								<p><strong>S. XIX.<br>
								John Joseph Merlin</strong></p>
								<p>Los primeros modelos de patines en línea fue diseñado por él,
								ingeniero e inventor canadiense de origen escocés.</p>
								
								<br><br><br>
								<img src="img/usa.png" alt=""><br>
								<p><strong>1987<br>
								Rollerblade</strong><br></p>
								<p>Los primeros en comercializar patines en línea en Estados Unidos</p><br>
								<img src="img/rollerblade_historia.png" alt="">
						</div>
							<div class="article2">
								<p><img src="img/usa.png" alt=""><br>
								<strong>1953<br>
								Ernest Kahlert</strong><br>
								Se concedió la primera patente en los Estados Unidos.</p><br>
									<img src="img/primer_roller.png" alt="">
									
							</div>
							<div class="history"><img src="img/history-1.png" alt=""></div>
						</div>

</div><!-- FIN CONTEN-->
<!-- PIE-->	
			<div class="pie">
	<!-- FORMULARIO -->
			
				
					<div class="suscribite"><h2>/SUSCRIBITE>></h2>
					<p>Suscribite a nuestro newsletter</p>				

            	<form method="POST" action="registro_pr.php">
    					Mail 
    				<input type="text" name="mail" placeholder="mail" required>
    				<!--boton-->
						<br><input id="btn" type="submit" value="Suscribirme">
			
				</form><!--Fin del formulario -->
			
	<!--SUSCRIBITE-->
				</div>
							<!--REDES-->
				
					<ul class="nav"><h2>/REDES>></h2>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">twitter</a></li>
							<li><a href="#">Pinterest</a></li>
								</ul>
								
					<img class="nena_pic" src="img/nena_patin.png" alt="">
				


		</div><!-- FIN PIE-->		


		<!-- enlazamos la libreria (para este caso seleccionamos el archivo que incluyte jquery-->
		
</body>
</html>