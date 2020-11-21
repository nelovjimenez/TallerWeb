<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Tiendita Del Manolo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tiendita.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="gordo">
<header>
        <div class="conteiner">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand text white">
                    <img src="Img/carro2.png" height="50px"  >
                   La Tiendita Del Manolo
                </a>
                <button class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="navbar-item active">
                <a href="AdminLaTiendita.php" class="nav-link">Admin</a>
             </li>
             <li class="navbar-item active">
                <a href="BodegaLaTiendita.php" class="nav-link">Bodega</a>
             </li>
             <li class="navbar-item active">
                <a href="company.html" class="nav-link">Company</a>
             </li>
             <li class="navbar-item active">
                <a href="login.html" class="nav-link">Logout</a>
             </li>
    
            </ul>
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
</header>
    <br>

    

<div class="container">

        <div class="col-md-6">
    <?php 

            $id=$_REQUEST['id'];
            $inc = include("conexion.php");
            if ($inc) {
                $consulta = "SELECT * FROM product WHERE id='$id'";
                $resultado = mysqli_query($conex,$consulta);


            $row = $resultado->fetch_array();{
            $id = $row['id'];
            $nombre = $row['nombre'];
            $marca = $row['marca'];
            $precio = $row['precio'];
            $descripcion = $row['descripcion'];
            $foto = $row['foto'];
            }
        }
    ?>
            <form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">

    

            <h1 class="text-center">La Tiendita Del Manolo</h1>
            <h2 class="text-center">Administracion de Productos</h2>
                <div class="form-group">
                    
                    <input type="text" placeholder="Nombre" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
                    <br>
                    <input type="text" placeholder="Marca" class="form-control" name="marca" value="<?php echo $row['marca']; ?>" >
                    <br>
                    
                    <input type="number" placeholder="Precio" class="form-control" name="precio" value="<?php echo $row['precio']; ?>">
                    <br>
                    <textarea class="form-control"  placeholder="Descripcion"  name="descripcion" value="<?php echo $row['descripcion']; ?>"></textarea>
                    <br>
                    <label class="font-weight-bond">FOTO:</label>
                    <input type="text" placeholder="Foto URL" class="form-control" name="foto" required value="<?php echo $row['foto']; ?>">
              
                </div>
                <input type="submit" class="btn btn-info btn-lg btn-block" value="Guardar Cambios" name="register">  
                <input type="reset" value="Resetear los datos" class="btn btn-info btn-lg btn-block">
            </form>
        </div>
    
</div>



<br>
<footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">
   
                <div class="colum1">
                    <h2>Mas informacion de la compañia</h1>
   
                    <p>Esta compañia se dedica a la venta de software integrado con un 
                    conjunto de cosas que no se lo que estoy escribiendo, este 
                    texto es solo para llenara informacion en el cuadro de informacion 
                    de la compañia.</p>
   
                </div>
   
                <div class="colum2">
   
                    <h2>Redes Sociales</h1>
   
                    <div class="row">
                        <img src="Img/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>                    
                    <div class="row">
                        <img src="Img/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>
   
                <div class="colum3">
                    <h2>Informacion Contactos</h1>
                    </div>
   
                    <div class="row2">
                        <img src="Img/smartphone.png">
                        <label>+57 3195103083</label>
                    </div>
   
                    <div class="row2">
                        <img src="Img/contact.png">
                         <label>nelovjimenez@hotmail.com</label>
                    </div>
   
                </div>
   
            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 Todos los Derechos Reservados | <a href="#"> EVJ- MANOLO </a>
                    </div>
   
                    <div class="information">
                        <a href="#">Informacion Compañia</a> | <a href="#">Privacion y Politica</a> | <a href="#">Terminos y Condiciones</a>
                    </div>
                </div>
   
            </div>
        
    </footer>   
 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html> 