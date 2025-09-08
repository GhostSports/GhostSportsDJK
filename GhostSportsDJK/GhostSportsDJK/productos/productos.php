<?php

if(isset($_POST['registro'])){


$codigo = $_POST['codigodebarras'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$stock = $_POST['stock'];
$dimenciones = $_POST['dimenciones'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$imagen = $_FILES['imagen']['name'];

move_uploaded_file($_FILES['imagen']['tmp_name'], "imagenes/" . $imagen);

$conn = mysqli_connect("localhost","root","","ghostsportsdjk");

$sql = "insert into producto values ('$codigo','$nombre','$marca','$stock','$dimenciones','$descripcion',
'$categoria','$imagen')";

mysqli_query($conn, $sql);

//header('location: producto.php');

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../index/estilosIndex.css">
    <link rel="stylesheet" href="estilosproductos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghost Sports</title>
    <script src="https://kit.fontawesome.com/ef698667d1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<header>
    
    <div class="contenedor-ingresar">
        <a href="../ingresar/ingresar.php">
            <button class="btn-ingresar" style="margin-right: 10px;">
                <span>INICIAR SESION</span>
            </button>
        </a>
        
           <a href="../contacto/contacto.php">
            <button class="btn-ingresar2"><span>REGRISTRARSE</span></button>
        </a>
    </div>

   
    <div class="logo">
        <a href="../index/index.php">
            <img src="../img/imagen56-Photoroom.png" alt="Logo" width="150px" height="150px" class="atras">
        </a>
    </div>

   
    <div class="fondo">
        <form>
            <input type="text" placeholder="Busqueda en la Web">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

   
    
</header>

 <section class="principal"> 

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Productos
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Increse el Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="width: 550px; height: 600px;">
        
        
    




<form action="productos.php" method="post" class="form" enctype="multipart/form-data">

<input type="text" placeholder="codigodebarras" name="codigodebarras" class="cajatexto">
<input type="text" placeholder="nombre" name="nombre" class="cajatexto">
<input type="text" placeholder="Marca" name="marca" class="cajatexto">
<input type="text" placeholder="stock" name="stock" class="cajatexto">
<input type="text" placeholder="dimenciones" name="dimenciones" class="cajatexto">
<input type="text" placeholder="descripcion" name="descripcion" class="cajatexto">
<input type="text" placeholder="categoria" name="categoria" class="cajatexto">
<div class="mb-3">
  <input class="form-control" type="file" id="formFile" name="imagen">
</div>
<a href="">
<input type="submit" name="registro" value="Registro" class="boton"></a>
</form>




     		

   

</section>

<footer>
    <div>
        <a href="https://www.facebook.com">
            <img src="../img/facebookn.png" alt="Facebook" width="50px" height="50px">
        </a>
        <a href="https://x.com/?lang=es">
            <img src="../img/xn.png" alt="Twitter/X" width="50px" height="50px">
        </a>
        <a href="https://www.instagram.com/">
            <img src="../img/instan.png" alt="Instagram" width="50px" height="50px">
        </a>
    </div>

    <div>
        <p class="textofooter">https://ghostsports.github.io/GhostSportsDJK</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>
