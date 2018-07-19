<!DOCTYPE html>
<html lang="en">
<head>
	<title>Verifica la compra</title>
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
                        <a href="producto.php"><img src="img/libros/palabraclave.jpg" class="media-object img-responsive" width="100%"> </a>
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
                            <li><a href="checkout.php">    Iniciar sesión</a></li>
                            <li><a href="direccion.php">   Datos de envío</a></li>
                            <li><a href="pago.php">        Forma de pago</a></li>
                            <li class="active">             Revisar</li>
                        </ol>
                        <h2>Valide sus datos</h2>  
                        <p>Método de pago: Pay Pal</p>
                        <p>Nombre: xxxxxxxxxxxxx</p>
                        <p>Dirección: xxxxxxxxxxxxx</p>
                        <p>Código postal: xxxxxxxxxxxxx</p>
                        <br><br>
                        <table class="table-striped" width="100%">
                            <tr>
                                <th width="12%">    Producto</th>
                                <th width="58%">    Descripción</th>
                                <th width="1.8%">   Cant. </th>
                                <th width="10.12%"> Precio</th>
                                <th width="10.12%"> Subtotal</th>
                                <th width="1%">     </th>
                                <th width="6.5%">   Borrar</th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="" width="105" alt="">
                                </td>
                                <td>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis at
                                        magna sed aliquet. Fusce eget imperdiet libero. Vestibulum quis scelerisque
                                        nulla. Nullam facilisis ullamcorper gravida. Etiam nec tempus sapien. 
                                        Nulla in laoreet justo, sit amet ullamcorper nunc. Duis dui metus, congue 
                                        ac tortor eu, aliquam porttitor tellus.
                                    </p>
                                </td>
                                <td class="text-right">1</td>
                                <td class="text-right">$150.00</td>
                                <td class="text-right">$150.00</td>
                                <td>&nbsp;</td>
                                <td class="text-right"><a href="#" class="btn btn-danger"> Borrar</a></td>
                            </tr>
                        </table>  
                        <hr>
                        <table width="100%" class="text-right">
                            <tr>
                                <td width="79.85%"></td>
                                <td width="11.55%">Subtotal: </td>
                                <td width="9.20%">$150.00 </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Descuento: </td>
                                <td>$0.00 </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Costo de envío:</td>
                                <td>$0.00 </td>
                            </tr>
                            <tr>
                                <td></td>   
                                <td>Gran total: </td>
                                <td>$150.00 </td>
                            </tr>
                            <tr>
                                <td><a href="index.php"    class="btn btn-info"    role="button">Seguir comprando</a></td>
                                <td><a href="#"             class="btn btn-info"    role="button">Recalcular</a></td>
                                <td><a href="gracias.php"  class="btn btn-success" role="button">Pagar</a></td>
                            </tr>
                        </table>                     
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