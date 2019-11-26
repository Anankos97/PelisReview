<!DOCTYPE html>
<?php
	include("conexion_sis.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elimina Review</title>
</head>
<body background="fondo.jpg">
    <center>
        <br><br>
    		<form ALIGN="left" action="Review-E.php" method="post">
	           <font size=7 color= "white" face="Comic Sans MS,arial,verdana">
	                   Deseas eliminar una review?
                </font>
               <font size=4 color= "white" face="Comic Sans MS,arial,verdana">       
            <br><br>
            <p>
            Elije la review: 
            <SELECT NAME="Review1">
            <option>Seleccione una Opción...</option>
            <font size=7 color= "white" face="Comic Sans MS,arial,verdana">
             <?php
                 $query1="SELECT Id_MiPelicula, Review FROM Mis_Peliculas";
                 //echo'.$query.';
 
                $result1 = mysql_query($query1) or die(mysql_error());
 
                while ($row=mysql_fetch_array($result1)){
 
                    echo "<option value=\"".$row['Id_MiPelicula']."\">".$row['Review']."</option>";
                 }
               ?>
            </SELECT>        
            <input type="submit" /></p>
        
            </form>
            </font>
            <font size=4 color= "white" face="Comic Sans MS,arial,verdana">
	        <?php	
			    $borrar_id = $_POST['Review1'];

		    	$borrar = "DELETE FROM Mis_Peliculas WHERE Id_MiPelicula='$borrar_id'";
			
			    $ejecutar = mysql_query($borrar);

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
    </div>
        </form>
        <br>
    	<form ALIGN="RIGHT" action="index.php" method="post"><input type="submit" value="Regresar" /></form>
    </center>
</body>
</html>