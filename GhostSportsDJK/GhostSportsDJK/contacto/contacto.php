
<?php

if(isset($_POST['registro'])){

    $identificacion = $_POST['identificacion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$pais = $_POST['pais'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$ciudad = $_POST['ciudad'];

$conn = mysqli_connect("localhost","root","","ghostsportsdjk");

$sql ="insert into cliente values
('$identificacion','$telefono','$correo','$direccion','$nombre','$apellidos','$pais','$fechaNacimiento','$ciudad','C')";

mysqli_query($conn, $sql);

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../index/estilosIndex.css">
    <link rel="stylesheet" href="estiloscontacto.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ef698667d1.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
  <header>
    <div class="contenedor-ingresar">
        <a href="../ingresar/ingresar.php">
            <button class="btn-ingresar">
                <span>INICIAR SESION</span>
            </button>
        </a>
        
       
    
    </div>

   
    <div class="logo">
        <a href="../index.php">
            <img src="../img/imagen56-Photoroom.png" alt="Logo" width="150px" height="150px" class="atras">
        </a>
    </div>

   
    <div class="fondo">
        <form>
            <input type="text" placeholder="Busqueda en la Web">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    
        <div class="botones-principales">
            <a href="../index.php">
            <button><span>INICIO</span></button>
        </a>
        <a href="../acerca/acerca.php">
            <button><span>ACERCA DE</span></button>
        </a>
        <a href="../portafolio/portafolio.php">
            <button><span>PRODUCTOS</span></button>
        </a>
       
    </div>
</header>
<section class="principalcontacto"> 
 
    <section class="contacto">
     
      <img src="../img/1077114.png" alt="" width="90px" height="90px"  class="loguser">
      <br>  
    
<form action="contacto.php" method="post" class="form ">

<input type="text" placeholder="identificacion" name="identificacion" class="cajatexto">
      <input type="number" placeholder="telefono" name="telefono"  class="cajatexto">
      <input type="email" placeholder="email" name="correo" class="cajatexto">
      <input type="text" placeholder="direccion" name="direccion" class="cajatexto">
      <input type="text" placeholder="nombre" name="nombre" class="cajatexto">
      <input type="text" placeholder="apellido" name="apellido" class="cajatexto">
      <input type="text" placeholder="pais" name="pais" class="cajatexto">
      <input type="date" placeholder="fechaNacimiento" name="fechaNacimiento" class="cajatexto">
      <input type="text" placeholder="ciudad" name="ciudad" class="cajatexto">

      <a href="../ingresar/ingresar.php"><input type="submit" name="registro" value="Registro" class="boton"></a>

 </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
  
    </section>

</section>
</form>
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

</body>
</html>
</body>
</html>


