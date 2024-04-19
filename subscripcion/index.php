<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulario de Registro SCIII</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link href="./estilos.css" rel="stylesheet" type="text/css">
    <link href="./login.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <h1 class="title-menu">Iniciar Sesion</h1>
        <form class="login" action="./lib/login.php" method="POST">
            <input type="text" placeholder="Usuario" class="formItem" id="user" name="user">
            <input type="password" placeholder="Contraseña" class="formItem" id="pass" name="pass">
            <input class="form-btn" name="submit" type="submit" value="Entrar" />
        </form>
    </div>
</body>

</html>