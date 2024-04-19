<?php 

/* validate sesion */
if (!isset($_SESSION['user'])) {
   
}else{
    header('Location: ./index.php');
}

?>

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
            <form action="../lib/confirmar.php" method="POST">
                <h2><em>Pase de Asistencia</em></h2>


                <label for="nombre">Buscar al asistente por nombre completó<span><em>(requerido)</em></span></label>
                <input style="text-transform: uppercase;" id="nombre" type="text" list="nombres" name="nombre"
                    class="form-input" required />
                <?php
           
            try{
              $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
              
              if (!$db_connection) {
                 die('No se ha podido conectar a la base de datos');
              }

              $query = "SELECT * FROM listado where isnull(Confirma)";
              $result = mysqli_query($db_connection, $query);
              if (!$result) {
                 die('Error en la consulta SQL');
              }
             
              

              


              }catch(Exception $e){
              echo $e->getMessage();
              die();
            }
            ?>
                <datalist id="nombres">
                    <?php 
                 while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="' . strtoupper(iso8859_1_to_utf8($row['Nombre'])) . '"></option>';               }
              
                ?>
                </datalist>

                <?php
            mysqli_close($db_connection);
            
            ?>


                <center> <input class="form-btn" name="submit" type="submit" value="Confirmar asistencia" /> <a
                        href="../menu.php" class="form-btn-back">Regresar al menu</a></center>
                </p>
            </form>
        </div>
    </div>
</body>

</html>