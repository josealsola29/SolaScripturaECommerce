<!DOCTYPE html>
<html lang="en">
<head>
	<title>Datos de envío</title>
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
						<li class="active"><a href="contacto.php">	Contacto</a></li>
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
                    <h4>Productos Relacionados</h4>
                    <div class="well">Biblias
                        <a href="producto.php"><img src="img/libros/palabraclave.jpg" class="media-object img-resposvive" width="100%"> </a>
                    </div>
    
                        <div class="well">Biblias de Estudio
                            <a href="producto.php"><img src="img/libros/vidaporsumuerte.jpg" class="media-object img-responsive" width="100%"> </a>
                        </div>	
                    
				</div>
				<!--  ************************C O L U M N A*********************         -->


				<!--  ************************C O L U M N A*********************         -->		
				<div class="col-sm-8 text-left">
                    <div class="well" id="contenedor">
                        <ol class="breadcrumb">
                            <li><a href="checkout.php">    Inciar sesión</a></li>
                            <li><a href="direccion.php">   Datos de envío</a></li>
                            <li class="active">             Formas de pago</li>
                            <li>Revisar</li>
                        </ol>
                        <h2 class="text-center">Formas de pago</h2>
                        <p> Favor de seleccionar una de las formas de pago   : </p>
                        <form action="verifica.php">

                            <div class="radio">
                                <label><input type="radio" name="pago" id="tarjeta1">Tarjeta de crédito 1</label>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="pago" id="tarjeta2">Tarjeta de crédito 2</label>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="pago" id="tarjeta3">Tarjeta de débito </label>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="pago" id="efectivo">Efectivo </label>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="pago" id="pay pal">Pay Pal </label>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="pago" id="bitcoins">Bitcoins </label>
                            </div>

                            <div class="form-group text-left">
                                    <label for="enviar"></label>
                                    <input type="submit" 			name="enviar" value="enviar" class="btn btn-success" role="button"/>
                            </div> 

                        </form>
                    </div>
				</div>
				<!--  ************************C O L U M N A*********************         -->


				<!--  ************************C O L U M N A*********************         -->
				<div class="col-sm-2 sidenav">
					<h4>Productos Relacionados</h4>
					<div class="well">Biblias
						<a href="producto.php"><img src="img/libros/palabraclave.jpg" class="media-object img-resposvive" width="100%"> </a>
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