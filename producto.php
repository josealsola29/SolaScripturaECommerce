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
						<li><a href="index.php">					Inicio</a></li>
						<li class="active"><a href="libros.php">	Libros</a></li>
						<li><a href="biblias.php">					Biblias</a></li>	
						<li><a href="sobremi.php">					Sobre mi</a></li>
						<li><a href="contacto.php">				Contacto</a></li>
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
								<!--  ************************CONTENIDO*********************         -->				

		<div class="container-fluid text-center">
			<div class="row content">

				<!--  ************************C O L U M N A*********************         -->
				<div class="col-sm-2 sidenav">
					<img src="img/libros/todossomosteologos.jpg" class="media-object img-responsive" width="100%"/>
					<br>
					<h4>Num. producto: 1234566</h4>
					<h4>Precio: $150.00</h4>
					<br><br>
					<div class="well">
						<p>Carrito de compras</p>
						<p>Total:</p>
					</div>
					<a href="carrito.php" class="btn btn-success" role="button">	Carrito</a>
					<a href="index.php" class="btn btn-info" role="button">		Regresar</a>					
				</div>
				<!--  ************************C O L U M N A*********************         -->


				<!--  ************************C O L U M N A*********************         -->		
				<div class="col-sm-8 text-left">
					<h2>TEOLOGIA</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis at magna
						sed aliquet. Fusce eget imperdiet libero. Vestibulum quis scelerisque nulla. 
						Nullam facilisis ullamcorper gravida. Etiam nec tempus sapien. 
						Nulla in laoreet justo, sit amet ullamcorper nunc. Duis dui metus, congue
						 ac tortor eu, aliquam porttitor tellus.
					</p>
					<h4>Descripción</h4>
					<p>Duis tincidunt pulvinar eros, eget mattis erat sagittis in. Aliquam bibendum, 
						metus at pellentesque dignissim, nunc nulla semper est, vel semper est mi euismod
						 velit. Cras et pellentesque nisl, eget viverra nisl. Sed mi arcu, tempor quis 
						 placerat sed, consectetur ut ante. Cras id risus odio. Sed venenatis mi sit amet 
						 quam rutrum, ut pellentesque odio facilisis. Morbi sit amet quam congue, semper 
						 lacus nec, tempor quam. Praesent blandit aliquam libero sed imperdiet. Quisque 
						 facilisis nibh sit amet consequat mattis. Fusce sed leo non arcu vulputate elementum.
						  Etiam maximus id lorem non vestibulum. Fusce at sodales risus. Etiam non dictum erat.
					</p>
					<h4>A quuien concierne</h4>
					<p>
						Nam aliquet mauris quam, maximus tincidunt velit egestas eu. Nullam semper augue tempus
						 dapibus pretium. Fusce et elit nec sapien varius porttitor ac non nisl. Proin ut nisl lectus.
						  Quisque porttitor dui nec lectus vestibulum, vitae auctor sapien dapibus. Nulla tincidunt 
						  augue vel ante vulputate consectetur. Pellentesque iaculis, ipsum non congue semper, nisi
						  nulla tristique turpis, sed bibendum felis enim in eros.
					</p>
				</div>
				<!--  ************************C O L U M N A*********************         -->


				<!--  ************************C O L U M N A*********************         -->
				<div class="col-sm-2 sidenav">
					<h4>Productos Relacionados</h4>
					<div class="well">Biblias
						<a href="producto.php"><img src="img/libros/palabraclave.jpg" class="media-object img-responsive" width="100%"> </a>
					</div>

					<div class="well">Biblias de Estudio
						<a href="producto.php"><img src="img/libros/vidaporsumuerte.jpg" class="media-object img-responsive" width="100%"> </a>
					</div>		
													
				</div>				
				<!--  ************************C O L U M N A*********************         -->			
			</div>
		</div><br><br>
	</body>



	<footer class="container-fluid text-center">
		<p> Todos los derechos reservados &copy;</p>
		<a href="aviso.php">Aviso de privacidad</a>	
	</footer>




</body>
</html> 