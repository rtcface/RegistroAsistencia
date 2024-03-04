<?php
include "./variables.php";
include "./functions.php";
$Id=0;

try{
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connection) {
   die('No se ha podido conectar a la base de datos');
}

$subs_name = clean_utf(strtoupper($_POST['nombre']));
$subs_inst = clean_utf(strtoupper($_POST['institucion']));
$subs_cargo = clean_utf(strtoupper($_POST['cargo']));
$subs_email = clean_utf(strtolower($_POST['email']));

$resultado=mysqli_query($db_connection, "SELECT * FROM ".$db_table_name." WHERE Nombre = '".$subs_name."'");

if (mysqli_num_rows($resultado)>0)
{
   while ($data = mysqli_fetch_array($resultado)) { 
      /* echo '<script language="javascript">alert("`' . $data["id"] . '`");</script>'; */
      $Id=$data["id"];
   }
   $update_value = 'UPDATE `' . $db_name . '`.`'.$db_table_name.'` SET `Confirma` = "1" where `id` = "'.$Id.'"';
   mysqli_select_db($db_connection, $db_name);
   $retry_value = mysqli_query($db_connection, $update_value);
   if (!$retry_value) {
      die('Error: ' . mysqli_error());
   }
   echo '<script language="javascript">alert("El usuario ' . $subs_name . ' Confirma su asistencia");
   window.location.href="../index.php";
   </script>';
   // header('Location: Success.html');
// $update_value = 'UPDATE `' . $db_name . '`.`'.$db_table_name.'` SET `Confirma` = "1" where ';
// mysqli_select_db($db_connection, $db_name);
//header('Location: Fail.html');


} else {
	
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre` , `Institucion` , `Cargo` ,  `Email`) VALUES ("' . $subs_name . '", "' . $subs_inst . '", "' . $subs_cargo . '", "' . $subs_email . '")';

mysqli_select_db($db_connection, $db_name);

$retry_value = mysqli_query($db_connection, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error());
}
/* 

header('Location: Success.html'); */

echo '<script language="javascript">alert("El usuario ' . $subs_name . ' Se Registro Exitosamente!!!");
   window.location.href="../index.php";
   </script>';

}

mysqli_close($db_connection);

}catch(Exception $e){
    echo $e->getMessage();
    die();
}



var_export($db_host, $db_user, $db_password, $db_name, $db_table_name)
		
?>