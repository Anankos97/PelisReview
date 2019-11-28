<!DOCTYPE html>
    <?php
	    include("conexion_sis.php");
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <title>PelisReview | Bienvenidos</title>
    <link href="https://fonts.googleapis.com/css?family=Istok+Web|Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body background="img/fondo.jpg">
	<!--  -->
	<header>
			<div class="contenedor">
				<!-- Encabezado -->  
				<div class="marca">
					<h1><span class=" marca resaltado">PELIS </span>REVIEW</h1>
				</div>
				<nav>
					<ul>
						<li class="actual"><a href="index.php">Inicio</a></li>
						<li class="catalogo"><a href="catalogo.php">Cat&aacute;logo</a></li>
						<li> | </li>
					<!-- Loggeo del usuario -->
						<li class="acceder"><a href="login.php">Acceder</a></li>
						<li class="registar"><a href="singup.php">Registro</a></li>
					</ul>
				</nav>				
			</div>
    </header>
	
	<section id="cabecera">
		<h1>Bienvenidos a PelisReview</h1>
		<p>El espacio exclusivo para los mejores cinefilos, comentanos que te parecieron estas peliculas que tenemos aqu&iacute;, podr&aacute;s conocer otros cinefilos que comparten t&uacute; misma opini&oacute;n. <br>Esperemos que t&uacute; visita sea de agrado.<p>
	</section>
	
	<section id="comentarios">
		<div class="contenedor">
			<h1>Comentarios Recientes</h1>
			<form action="Review.php" method="post" class="review">
				<input type=image src="img/B_R.png">
			</form>
		</div>
	</section>
	
    <div class="cont-1">
        <div class="text-center">
			<!-- Últimos comentarios -->

        <div class="tabla_i center-all">
            <div class="verdana font-16">
               <table class="table table-bordered table-responsive" border="5">
                    <tr aling="justify">
						<td>USUARIO</td>
						<td>PELICULA</td>
						<td>REVIEW</td>
					</tr>

                <?php
			      $consulta1 = 'SELECT M.Usuario, P.Nombre, M.Review FROM Mis_Peliculas M join Peliculas P on P.Id_Pelicula=M.Pelicula';

			      $ejecutar1 = mysql_query($consulta1);

			      $i = 0;

			      while($fila = mysql_fetch_array($ejecutar1)){
				    $Usuario = $fila['Usuario'];
				    $Pelicula = $fila['Nombre'];
				    $Review = $fila['Review'];
				    $i++; 
				   
				?>
					<tr align="justify">
						<td><?php echo $Usuario; ?></td>
						<td><?php echo $Pelicula; ?></td>
						<td><?php echo $Review; ?></td>
					</tr>
				<?php } ?>
			   </table>
            </div>
        </div>
    </div>
    <br>
	<footer>
		<p><b>Integrantes: - Ana V&aacute;squez, Mario Loera,</b> Equipo 2 &copy; 2019</p>
	</footer>
	<!-- Inicio. radio hosting USAstreams.com html5 player -->
	<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="250px" height="140px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/html5-player-barra-meter.aspx?stream=https://streamer.radio.co/s06b196587/listen&fondo=05&formato=mpeg&color=14&titulo=2&autoStart=1&vol=4&nombre=Radio+TOP40&botonPlay=2"><a href="https://www.usastreams.com/" alt = "Usastreams.com posicionamiento web, Servicios SEO y SEM, servicios streaming" title="streaming para television hd ,hosting television gratis ,Servicios de Streaming Para Tv On Line ,Servicios streaming broadcast de canales de televison,">streaming hosting tv ,streaming eventos</a></iframe>
	<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
</body>
</html>
