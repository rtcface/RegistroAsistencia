<?php 
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
   
 }else{
     header("Location: ../Fail.html");
 }
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulario de Registro SCIII</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link href="./estilos.css" rel="stylesheet" type="text/css">
    <?php   
      include './lib/variables.php';
      include './lib/functions.php';
      
      ?>

</head>

<body>

    <div class="container">
        <h1 class="title-menu">Eventos Sesaet - <?php echo $_SESSION['user'] ?></h1>
        <ul class="custom-ul">
            <li class="custom-li">
                <a href="./local_register.php" class="lnk">Registro de asistentes</a>
            </li>
            <li class="custom-li">
                <a href="./asistencia/asistencia.php" class="lnk">Pase de lista</a>
            </li class="custom-li">
            <li class="custom-li">
                <a href="./local_register.php" class="lnk">Lista de usuarios registrados</a>
            </li>
            <li class="custom-li">
                <a href="./lib/close.php" class="lnk">Cerrar sesion</a>
            </li>
        </ul>
    </div>
</body>

</html>