<?php 

include("conexion.php");


        $id=$_REQUEST['id'];
        

	    $consulta = "DELETE FROM product WHERE id='$id' ";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
            header("Location: BodegaLaTiendita.php")
	    	?> 
	    	<h3 class="text-center">¡Se ha actualizado correctamente!</h3>

           <?php
	    } else {
	    	?> 
	    	<h3 class="text-center">¡Ups ha ocurrido un error!</h3>
           <?php
		} 
	

?>