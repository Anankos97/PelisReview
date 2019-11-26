<!DOCTYPE html>
    <?php 
	include("conexion_sis.php");
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registra Review</title>
    <link href="css/style.css"" rel="stylesheet" type="text/css">
</head>
<body class="Registro" background="fondo.jpg">
    <center>
    <font size=4 color= "white" face="Comic Sans MS,arial,verdana">

    <form ALIGN="RIGHT" action="Review.php" method="post">

    
        <font size=7 color= "white" face="Comic Sans MS,arial,verdana">
        Haz tu review
        </font>
            <br><br><br>
        <table class="R">
        <p>Tu nombre: <input type="text" name="Usuario" /></p>
        Elije la pel&iacute;cula:
        <SELECT NAME="Peliculas">
        <option>Seleccione una Opci&oacute;n...</option>

        <?php
                $query="SELECT Id_Pelicula, Nombre FROM Peliculas order by Nombre";
                 //echo'.$query.';

                $result = mysql_query($query) or die(mysql_error());

                while ($row=mysql_fetch_array($result))
                {
                    echo "<option value=\"".$row['Id_Pelicula']."\">".$row['Nombre']."</option>";
                }
        ?>
       </SELECT>
        <p>Review: <input type="text" name="Review"/><br><br>
            <input type="submit" value="Capturar Review" /></p>
        </table>
        
    </form>
</font> 
    <?php
		
			$Usuario = $_POST['Usuario'];
			$Peliculas = $_POST['Peliculas'];
			$Review = $_POST['Review'];

			$insertar = "INSERT INTO  Mis_Peliculas(Pelicula, Review, Usuario)VALUES('$Peliculas', '$Review', '$Usuario' )";

			$ejecutar = mysql_query($insertar);

			if($ejecutar){
				echo "<h3>Tu review se ha actualizado correctamente</h3>";
			}

	?>

	    <div class="tabla_r">
        <font size=4 color= "white" face="Comic Sans MS,arial,verdana">
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
        </font>
        <br>
            <form ALIGN="RIGHT" action="index.php" method="post"><input type="submit" value="Regresar"/></form>
        </div>
    </center>
</body>
</html>
