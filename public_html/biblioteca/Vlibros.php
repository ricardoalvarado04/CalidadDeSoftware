<!DOCTYPE html>
<html>
<head>
	<title></title>

<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="css/hoja_libros.css">
<script type="text/javascript" src="js/funcionesLibros.js"></script>
=======
<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="../css/hoja_libros.css">
<script type="text/javascript" src="../js/funcionesLibros.js"></script>
=======
	<link rel="stylesheet" type="text/css" href="css/hoja_libros.css">
<script type="text/javascript" src="js/funcionesLibros.js"></script>
>>>>>>> 263eb985b785b89cf17dcb66c030e33a8aec54df
>>>>>>> fe425aa (metricas)
</head>
<body>

<script type="text/javascript">
		$(function ListarDefault(){
			var parametros = {
			"dbusqueda": $("#txtbusqueda").val()
			};

			$.ajax({
			data: parametros,
<<<<<<< HEAD
			url: 'listarlibros.php',
=======
<<<<<<< HEAD
			url: '../listarlibros.php',
=======
			url: 'listarlibros.php',
>>>>>>> 263eb985b785b89cf17dcb66c030e33a8aec54df
>>>>>>> fe425aa (metricas)
			type: 'POST',
			beforeSend: function(){
			$("#ListaLi").html("Procesando")
			},
			success: function(datos){
			$("#ListaLi").html(datos);
			}
			});


			})
		</script>


	<div id="ContenidoLi">
		
		<div id="DatosLi">
			


			<div id="tablaLi">
				
				<h1>Lista de Libros</h1>
				<div id="busqueda">

					<div id="NuevoLi">

					</div>	

					<div id="BusquedaLi">
					<input type="text" id= "txtbusqueda" name="" placeholder="Titulo,Autor,Género,Editorial">
					<button type="button" onclick="ListarLibros();">Buscar</button>
					
					</div>

					
				</div>

				<div id="ListaLi">
					
				</div>

			</div>


		</div>

	</div>




</body>
</html>