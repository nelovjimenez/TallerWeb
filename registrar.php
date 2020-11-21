<?php 
include("conexion.php");

if (isset($_POST['register'])) {
	    $nombre = trim($_POST['nombre']);
	    $marca = trim($_POST['marca']);
		$precio = trim($_POST['precio']);
		$descripcion = trim($_POST['descripcion']);
		$foto = $_POST['foto'];
		//$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
			
			

	    $consulta = "INSERT INTO product (nombre, marca, precio, descripcion, foto) VALUES ('$nombre','$marca','$precio','$descripcion', '$foto')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="text-center">¡Se ha registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="text-center">¡Ups ha ocurrido un error!</h3>
           <?php
		} 
	}

?>


   


