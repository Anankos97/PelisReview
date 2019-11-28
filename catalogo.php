<!DOCTYPE html>
    <?php
	    include("conexion_sis.php");
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReviewPelis | Cat&aacute;logo</title>
    <link href="https://fonts.googleapis.com/css?family=Istok+Web|Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body background="fondo.jpg">
	<header>
			<div class="contenedor">
				<!-- Encabezado -->  
				<div class="marca">
					<h1><span class=" marca resaltado">PELIS </span>REVIEW</h1>
				</div>
				<nav>
					<ul>
						<li class="inicio"><a href="index.php">Inicio</a></li>
						<li class="actual"><a href="catalogo.php">Cat&aacute;logo</a></li>
						<li> | </li>
					<!-- Loggeo del usuario -->
						<li class="acceder"><a href="login.php">Acceder</a></li> 
						<li class="registar"><a href="singup.php">Registro</a></li
					</ul>
				</nav>				
			</div>
    </header>
    <div class="center-all">
        <div class="text-center">
            <font color= "white">
				<!-- Películas disponibles -->
                <h1>Cat&aacute;logo de Pel&iacute;culas</h1>

                <h2>Elige una pel&iacute;cula</h2>
            </font>
        </div>

        <form action="Review.php" method="post" class="poster-inline">

            <div id="Avengers_EndGame-img">
                <input type=image src="https://upload.wikimedia.org/wikipedia/en/0/0d/Avengers_Endgame_poster.jpg"
                       alt="Avengers EndGame" class="poster" -data-revealed="true">
            </div>

            <div id="Alita_Battle_Angel-img">
                <input type=image src="https://upload.wikimedia.org/wikipedia/zh/5/51/Alita_Battle_Angel_Poster.jpg"
                       alt="Alita Battle Angel" class="poster" -data-revealed="true">
            </div>

            <div id="Dragon_Ball_Super_Broly-img">
                <input type=image src="https://www.miradetodo.online/movies/static/img/w300//f03YksE4NggUjG75toz4H1YAGRf.jpg"
                       alt="Dragon Ball Super Broly" class="poster" -data-revealed="true">
            </div>

            <div id="Frozen_2-img">
                <input type=image  src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4f/Frozen_2_poster.jpg/220px-Frozen_2_poster.jpg"
                       alt="Frozen 2" class="poster" -data-revealed="true">
            </div>

            <div id="Sharknado-img">
                <input type=image src="https://m.media-amazon.com/images/M/MV5BODcwZWFiNTEtNDgzMC00ZmE2LWExMzYtNzZhZDgzNDc5NDkyXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg"
                       alt="Sharknado" class="poster" -data-revealed="true">
            </div>

            <div id="Toy_Story_4-img">
                <input type=image src="https://66.media.tumblr.com/78908ac3fb165e24288af4fd60642c20/tumblr_pp1geeFGJx1ukr38ro1_1280.jpg"
                       alt="Toy Story 4" class="poster" -data-revealed="true">
            </div>

        </form>
        <div class="botones text-center">
			<a href="Modifica.php" class="B-M"><img src="img/B_M-R.png" width="25%" height="30%"></a>
			<a href="Elimina.php" class="B-E"><img src="img/B_E-R.png" width="25%" height="30%"></a>
        </div>
        <br>
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
