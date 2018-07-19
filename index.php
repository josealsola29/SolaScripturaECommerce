<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sola Scriptura</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
								<!--  *****************BARRA DE NAVEGACION*******************         -->
	<header>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid"> 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">Sola Scriptura</a>
				</div>

				<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Inicio</a></li>
						<li><a href="libros.php">				Libros</a></li>
						<li><a href="biblias.php">			Biblias</a></li>						
						<li><a href="sobremi.php">				Sobre Mi</a></li>
						<li><a href="contacto.php">			Contacto</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
							<!--  *****************BARRA DE NAVEGACION*******************         -->


	<body>		
								<!--  ************************BANNER TOP*********************         -->
		<div class="jumbotron">
			<div class="containe text-center">
				<h1> Todo sobre libros teológicos</h1>
				<p>1 Pedro 3:15: ... y estad siempre preparados para presentar defensa ...  </p>			
			</div>		
		</div>
								<!--  ************************BANNER TOP*********************         -->

								<!--  ************************CONTENIDO*********************         -->				

		<div class="container-fluid bg-3 text-center">
			<div class="row">
				<!--  ************************C O L U M N A*********************0         -->
				<div class="col-sm-3">
					<p><a href="productos.php">Teología Sistematica</a></p>
					<a href="producto.php">
						<img src="img/libros/todossomosteologos.jpg" class="img-responsive img-rounded" style="width: 100%" alt="TodosSomosTeologos">
					</a>
				</div>
						<!--  ************************C O L U M N A*********************         -->

						<!--  ************************C O L U M N A********************* 1        -->
				<div class="col-sm-3">
					<p><a href="productos.php">Historia</a></p>
					<a href="producto.php">
						<img src="img/libros/historiadelcristianismo.jpg" class="img-responsive img-rounded" style="width: 100%" alt="Historia">
					</a>
				</div>
						<!--  ************************C O L U M N A*********************         -->

						<!--  ************************C O L U M N A*********************2         -->
				<div class="col-sm-3">
					<p><a href="productos.php">Salmos</a></p>
					<a href="producto.php">
						<img src="img/libros/eltesorodedavid.jpg" class="img-responsive img-rounded" style="width: 100%" alt="ElTesoroDeDavid">
					</a>			
				</div>
						<!--  ************************C O L U M N A*********************         -->

						<!--  ************************C O L U M N A*********************         -->
				<div class="col-sm-3">
					<p><a href="productos.php">Amor</a></p>
					<a href="producto.php">
						<img src="img/libros/ledijeadiosalacitasamorosas.jpg" class="img-responsive img-rounded" style="width: 100%" alt="LeDijeAdiosALasCitasAmorosas">
					</a>			
				</div>
					<!--  ************************C O L U M N A*********************         -->		
						
			</div>
		</div><br><br>
	</body>


	<footer class="container-fluid text-center">
		<p> Todos los derechos reservados &copy;</p>	
		<form class="form-inline">Buscar: 
			<input type="text" name="Buscar" id="buscar" class="form-control" size="50" placeholder="buscar un producto">
			<button type="button" class="btn btn-info"> ir</button>
		</form>	
	</footer>




</body>
</html> 