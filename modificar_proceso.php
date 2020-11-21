<?php 

include("conexion.php");

if (isset($_POST['register'])) {
        $id=$_REQUEST['id'];
	    $nombre = trim($_POST['nombre']);
	    $marca = trim($_POST['marca']);
		$precio = trim($_POST['precio']);
		$descripcion = trim($_POST['descripcion']);
		$foto = ($_FILES['foto']);
			print_r($_FILES);

	    $consulta = "UPDATE product  SET nombre='$nombre', marca='$marca', precio='$precio', descripcion='$descripcion', foto='$foto' WHERE id='$id' ";
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
	}

?>