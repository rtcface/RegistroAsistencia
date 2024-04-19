<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulario de Registro SCIII</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="../estilos.css" rel="stylesheet" type="text/css">
    <?php   
      include '../lib/variables.php';
      include '../lib/functions.php';
      
      ?>

</head>

<body>

    <div class="container">
        <div class="group">
            <form action="../lib/register_externo.php" method="POST">
                <h2><em>Formulario de Registro</em></h2>


                <label for="nombre">Nombre Completo<span><em>(requerido)</em></span></label>
                <input style="text-transform: uppercase;" id="nombre" type="text" name="nombre" class="form-input"
                    required autocomplete="off" />

                <label for="apellido">Insitucion/Dependencia<span></span></label>
                <input style="text-transform: uppercase;" type="text" name="institucion" class="form-input" />

                <label for="apellido">Cargo<span></span></label>
                <input style="text-transform: uppercase;" type="text" name="cargo" class="form-input" />

                <label for="email">Correo Electronico <span></span></label>
                <input type="email" style="text-transform: lowercase;" name="email" class="form-input" />
                <center> <input class="form-btn" name="submit" type="submit" value="Registrar" /></center>
                </p>
            </form>
        </div>
    </div>
</body>

</html>