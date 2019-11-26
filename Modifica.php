<!DOCTYPE html>
<?php
	include("conexion_sis.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifica Review</title>
</head>
<body background="fondo.jpg">
    <center>
        <br><br>
    <font size=7 color= "white" face="Comic Sans MS,arial,verdana">
       ¿Desea actualizar una review?
    </font>
    <br><br><br>
    <font size=4 color= "white" face="Comic Sans MS,arial,verdana">
    <form ALIGN="left" action="Review-M.php" method="post">
        Elije la review:
        <SELECT NAME="Review5">
            <option>Seleccione una Opción...</option>

          <?php
               $query1="SELECT Id_MiPelicula, Review FROM Mis_Peliculas";
               //echo'.$query.';

               $result1 = mysql_query($query1) or die(mysql_error());

               while ($row=mysql_fetch_array($result1)){
                      echo "<option value=\"".$row['Id_MiPelicula']."\">".$row['Review']."</option>";
               }
          ?>
        </SELECT>
        <p>Haz tu nueva review: <input type="text" name="Review3" /></p>
        <input type="submit" value="Actualizar"/></p>
    </form>
          <?php


			$actualizar = $_POST['Review3'];
			$sel_review = $_POST['Review5'];

			$actualizar_ = "update Mis_Peliculas set Review='$actualizar' where Id_MiPelicula='$sel_review'";

			$ejecutar8 = mysql_query($actualizar_);

			if($ejecutar8){
					echo "<h3>Tu review se ha actualizado correctamente</h3>";
            }
          ?>
    </font>
    
    <div class="tabla_m">
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
    </div>
    <br>
    <form ALIGN="RIGHT" action="index.php" method="post"><input type="submit" value="Regresar" /></form>
    </center>
</body>
</html>