<?php
	require "php/conn.php";
	if(isset($_POST["email"])){
		$email = 		$_POST["email"];
		$contraseña = 	$_POST["contraseña"];
		$contraseña2 = hash_hmac("sha512", $contraseña, "soybatman");

		$sql = "SELECT * FROM usuarios WHERE email = '".$email."' AND contraseña = '".$contraseña2."'";
		$resultado = mysqli_query($conn,$sql);
		$numFilas = mysqli_num_rows($resultado);
		if($numFilas == 1 ){
			print "Bienvenido";
		} else {
			$error = "Contraseña o correo eletrónico incorrectos";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
						<li><a href="sobremi.php">	                Sobre Mi</a></li>
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
					<?php
							if(isset($error)){
								print '<div class="alert alert-danger">';
								print "<strong>* ".$error."</strong>";							
								print '</div>';
							}
						?>
                        <h2>Iniciar Sesión </h2>

                        <form class="text-left" action="login.php" method="post">
                            <div class="form-group">
                                <label for="email">Correo eletrónico: </label>
                                <input type="email" name="email" id="email" class="form-control" required placeholder="Escribe tu correo eletrónico">
                            </div>

                            <div class="form-group">
                                    <label for="contraseña">Clave de acceso: </label>
                                    <input type="password" name="contraseña" id="contraseña" class="form-control" required placeholder="Escribe tu contraseña de acceso">
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox">Recordarme</label>                                    
                            </div>

                            <a href="index.php" class="btn btn-success">Enviar</a>
                        </form>     

                    </div>

                    <div class="well text-left" id="contenedor">
                            <a href="olvido.php" class="btn btn-info">¿Olvidó su clave de acceso?</a>
                            <br><br>
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
								<!--  ************************CONTENIDO*********************         -->		
	</body>



	<footer class="container-fluid text-center">
		<p> Todos los derechos reservados &copy;</p>
		<a href="aviso.php">Aviso de privacidad</a>	
	</footer>




</body>
</html> 