<?php
	require "php/conn.php";
	$errores=array(); 
	if(isset($_POST["nombre"])){
		$nombre =			$_POST["nombre"];
		$apellidoPaterno = 	$_POST["apellidoPaterno"];
		$apellidoMaterno = 	$_POST["apellidoMaterno"];
		$email = 			$_POST["email"];
		$contraseña1 = 		$_POST["contraseña1"];
		$contraseña2 = 		$_POST["contraseña2"];
		$direccion = 		$_POST["direccion"];
		$pais = 			$_POST["pais"];
		$provincia = 		$_POST["provincia"];

		if($nombre == ""){
			$errores[0] = 	"Alerta! . . . Se requiere el nombre del usuario >:c";
		}else if($apellidoPaterno == ""){
			$errores[1]=	"Alerta! . . . Se requiere el apellido paterno del usuario >:c";
		}else if($email == ""){
			$errores[2]=	"Alerta! . . . Se requiere el email del usuario >:c";
		}else if($direccion == ""){
			$errores[3]=	"Alerta! . . . Se requiere la dirección del usuario >:c";
		}else if($pais == ""){
			$errores[4]=	"Alerta! . . . Se requiere país del usuario >:c";
		}else if($provincia == ""){
			$errores[5]=	"Alerta! . . . Se requiere la provincia del usuario >:c";
		}else if($contraseña1 !== $contraseña2){
			$errores[10]=	"Alerta! . . . Se requiere que las claves sean idénticas. >:c";
		}else{			
			if(validarCorreo ($email, $conn)){		
				$clave = hash_hmac("sha512",$contraseña1,"soybatman");	
				$sql = "INSERT INTO usuarios VALUES (0,";
				$sql .= "'".$nombre.			"', '".$clave."', '".$apellidoPaterno."',";
				$sql .= "'".$apellidoMaterno.	"', '".$email.			"', ";
				$sql .= "'".$direccion.			"', '".$pais.			"', ";
				$sql .= "'".$provincia.			"')";

				if(mysqli_query($conn,$sql)){
					header("location: registroGracias.php");
				}else {
					$errores[9] = "Alerta! . . . Se  ha producido un error en la a la base de datos >:c";
				}
			}else {
				$errores[8] = "Alerta! . . . El correo ya esta en uso. >:/";
			}
		}
	}
	
	function validarCorreo($email, $conn){		
		$sql 		= "SELECT * FROM usuarios WHERE email='".$email."'";
		$resultado 	= mysqli_query($conn,$sql); 
		//Numero de renglones que trae el resultado
		$numFilas 	= mysqli_num_rows($resultado);
		//Si el numero de renglones es igual a 0 retornar true, de lo contrio retornar 0
		$consulta 	= ($numFilas == 0) ? true : false;		
		return $consulta;
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
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
						<?php
							if(count($errores)>0){
								print '<div class="alert alert-danger">';
								foreach ($errores as $key => $valor) {
									print "<strong>* ".$valor."</strong>";
								}
								print '</div>';
							}
						?>
                        <h2 class="text-center">Registro</h2>
                        <p> Favor de capturar los siguientes datos: </p>
                        <form action="registro.php" method="post">
                            <div class="form-group text-left">
                                <label for="nombre">* Nombre:</label>
                                <input type="text" 					name="nombre" 			id="nombre" 			class="form-control" required placeholder="Escriba su nombre"/>
                            </div>

                            <div class="form-group text-left">
                                    <label for="apellidoPaterno">	* Apellido Paterno:</label>
                                    <input type="text" 				name="apellidoPaterno" 	id="apellidoPaterno" 	class="form-control" required placeholder="Escriba su apellido paterno"/>
                            </div>

                            <div class="form-group text-left">
                                    <label for="apellidoMaterno"> 	Apellido Materno:</label>
                                    <input type="text" 				name="apellidoMaterno" 	id="apellidoMaterno" 	class="form-control"  		placeholder="Escriba su apellido materno"/>
                            </div>  
                            
                            <div class="form-group text-left">
                                    <label for="email">			* Correo Electrónico:</label>
                                    <input type="email" 			name="email" 			id="email" 			class="form-control" 	 	placeholder="Escriba su correo electrónico"/>
                            </div>   
                            <div class="form-group text-left">
                                    <label for="contraseña1">			* Contraseña:</label>
                                    <input type="password" 			name="contraseña1" 			id="contraseña1" 			class="form-control" 	 	placeholder="Escriba su contraseña"/>
                            </div>   
                            <div class="form-group text-left">
                                    <label for="contraseña2">			* Repetir contraseña:</label>
                                    <input type="password" 			name="contraseña2" 			id="contraseña2" 			class="form-control" 	 	placeholder="Escriba su contraseña nuevamente"/>
                            </div>   
                            
                            <div class="form-group text-left">
                                    <label for="direccion">			* Dirección:</label>
                                    <input type="text" 			name="direccion" 			id="direccion" 			class="form-control" 	 	placeholder="Escriba su dirreción"/>
                            </div>  
   
                            <div class="form-group text-left">
                                    <label for="pais">			* País:</label>
                                    <input type="text" 			name="pais" 			    id="pais" 			    class="form-control" 	 	placeholder="Escriba su país"/>
                            </div>

                            <div class="form-group text-left">
                                    <label for="provincia">			* Provincia:</label>
                                    <input type="text" 			name="provincia" 			    id="provincia" 			class="form-control" 	 	placeholder="Escriba su provincia"/>
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