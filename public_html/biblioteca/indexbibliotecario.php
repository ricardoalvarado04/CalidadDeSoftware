
<?php 
	
	include('../dbconexion.php');

	/*$id = $_GET["id"];*/

	session_start();
	$id = $_SESSION["idb"];

	$query= "SELECT Nombres, Apellidos, Nro_Carnet FROM bibliotecario wHERE CodBibliotecario = '$id'";

	$resultado = $cnmysql->query($query);

	$fila = mysqli_fetch_array($resultado);

	$nombre = $fila['Nombres'];
	$apellidos = $fila['Apellidos'];
	$carnet  = $fila['Nro_Carnet'];


<<<<<<< HEAD
	$texto = "Bibliotecario: " .$nombre ." " .$apellidos ." | " ."Nro Carnet: " .$carnet;
=======
<<<<<<< HEAD
	$texto = "Bibliotecario: " .$nombre ." " .$apellidos ." | " ."Usuario: " .$carnet;
=======
	$texto = "Bibliotecario: " .$nombre ." " .$apellidos ." | " ."Nro Carnet: " .$carnet;
>>>>>>> 263eb985b785b89cf17dcb66c030e33a8aec54df
>>>>>>> fe425aa (metricas)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>
	<script type="text/javascript" src="js/funcionesBibliotecario.js"></script>
	<script type="text/javascript" src="js/funcionesLector.js"></script>
	<script type="text/javascript" src="js/funcioneslibro.js"></script>
	<script type="text/javascript" src="js/funcionesAutor.js"></script>
	<script type="text/javascript" src="js/funcionesEditorial.js"></script>
	<script type="text/javascript" src="js/funcionesGenero.js"></script>
	<script type="text/javascript" src="js/funcionesAccionesLector.js"></script>

<script type="text/javascript" src="js/funcionesPrestamo.js"></script>

	<link rel="stylesheet" href="css_l/hoja_index_bibliotecario.css">
<<<<<<< HEAD
=======
<<<<<<< HEAD
	
=======
>>>>>>> fe425aa (metricas)
	<title>Sistema de Biblioteca</title>



<<<<<<< HEAD
=======
>>>>>>> 263eb985b785b89cf17dcb66c030e33a8aec54df
>>>>>>> fe425aa (metricas)
</head>
<body onload="VistaInicio()">
	<div id="contenedor">

	

		<header>
		
			

			<div id="titulo">
<<<<<<< HEAD
				<h1>Sistema de Biblioteca</h1>
=======
<<<<<<< HEAD
=======
				<h1>Sistema de Biblioteca</h1>
>>>>>>> 263eb985b785b89cf17dcb66c030e33a8aec54df
>>>>>>> fe425aa (metricas)
				<h3><?php echo $texto;?></h3>
			</div>	

			<div id="banner">
				<div><img src="img_l/banner.jpg" width="900" height="200"></div>	
			</div>

		</header>

		<br>
		<hr>

		<nav>
		<center>

			<ul id="menu">
				<li><a onclick="VistaInicio();">Inicio</a></li>
				<li><a onclick="VistaBibliotecario();">Bibliotecarios</a></li>
<<<<<<< HEAD
=======
<<<<<<< HEAD
				<li><a onclick="VistaLibro();">Libros</a></li>
				<li><a onclick="VistaLector();">Lectores</a></li>
				<li><a href="http://localhost/biblioteca/biblioteca/vmetrica.php">Métricas</a></li>
=======
>>>>>>> fe425aa (metricas)
				
				<li><a onclick="VistaLibro();">Libros</a></li>
				<li><a href="http://localhost/Sis%20Biblioteca%20v01/biblioteca/Vmetrica.php">Métricas</a></li>
				
<<<<<<< HEAD
=======
>>>>>>> 263eb985b785b89cf17dcb66c030e33a8aec54df
>>>>>>> fe425aa (metricas)
				<li><a href="../index.php">Salir</a></li>
			</ul>



		</center>
		</nav>


		<section>
			<div id="contenido">
			
			</div>
		</section>

		<footer>
<<<<<<< HEAD
			<p>Senati-Desarrollo de Software Ciclo V | Proyecto Sistema de Biblioteca © | SJM</p>
=======
<<<<<<< HEAD
			<p>Biblioteca El Imperial © | Gestion y Calidad del Software - UCC 2023</p>
=======
			<p>Senati-Desarrollo de Software Ciclo V | Proyecto Sistema de Biblioteca © | SJM</p>
>>>>>>> 263eb985b785b89cf17dcb66c030e33a8aec54df
>>>>>>> fe425aa (metricas)
		</footer>
		
	</div>








</body>
</html>