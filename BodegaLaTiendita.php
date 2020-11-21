<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>La Tiendita Del Manolo</title>

</head>
<body>

<div class="conteiner">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand text white">
                    <img src="Img/carro2.png" height="50px"  >
                    La Tiendita Del Manolo
                </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="navbar-item active">
                <a href="AdminLaTiendita.php" class="nav-link">Administra Los Productos</a>
             </li>
             <li class="navbar-item active">
                <a href="BodegaLaTiendita.php" class="nav-link">Bodega De Productos</a>
             </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</div>

<br><br>
<h1 class="text-center">La Tiendita Del Manolo</h1>
<h2 class="text-center">Productos En Stock</h2>
<br><br>

<div class="container">
        <div class="row row-cols-1 row-cols-md-3"> 
        
<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM product";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {?>

<?php while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
	    $marca = $row['marca'];
      $precio = $row['precio'];
      $descripcion = $row['descripcion'];
      $foto = $row['foto'];?>
     
    
            <div class="col mb-4">
                <div class="card">
                <img src="<?php echo ($row["foto"]); ?>" class="card-img-top" alt="Imagen" width="100" heigth="1000">
                    <div class="card-body">
                            <h5 class="card-title"><?php echo $nombre; ?></h5>
                            <p class="card-text">$<?php echo $precio; ?></p>
                            <p class="card-text"><?php echo $marca; ?></p>
                            <p class="card-text"><?php echo $descripcion; ?></p>
                            <a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a>
                            <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                      </div>
                </div>      
          </div>
     <?php
    }
  }
}
?>
    </div>
</div>

<br><br><br>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</html>