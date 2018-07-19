<!DOCTYPE html>
<html lang="en">
<head>
	<title>Olvido de la clave de acceso</title>
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
						<li><a href="libros.php">	                Libros</a></li>
						<li><a href="biblias.php">					Biblias</a></li>	
						<li><a href="sobremi.php">	                Sobre mi</a></li>
						<li><a href="contacto.php">				Contacto</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
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
                    <h4>Productos Relacionados</h4>
                    <div class="well">Biblias
                        <a href="producto.php"><img src="img/libros/palabraclave.jpg" class="media-object img-responsive" width="100%"> </a>
                    </div>
    
                        <div class="well">Biblias de Estudio
                            <a href="producto.php"><img src="img/libros/vidaporsumuerte.jpg" class="media-object img-responsive" width="100%"> </a>
                        </div>	
                    
				</div>
				<!--  ************************C O L U M N A*********************         -->


				<!--  ************************C O L U M N A*********************         -->		
				<div class="col-sm-8 text-center">
                    <div class="well" id="contenedor">
                        <h2>¿Olvidó la clave de acceso?</h2>
                        <form class="text-left">
                            <div class="form-group">
                                <label for="email">Correo eletrónico: </label>
                                <input type="email" name="email" id="email" class="form-control" required placeholder="Escribe tu correo eletrónico">
                            </div>
                            <a href="olvidoGracias.php" class="btn btn-success">Enviar</a>
                        </form>                 
                    </div>
                    <div class="well text-left" id="contenedor"> 
                            <a href="registro.php" class="btn btn-info">Registrarse en el sitio</a>
                    </div>
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