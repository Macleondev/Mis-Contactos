<?php
//Incluyo el archivo de la conexion a la BD
include("conexion.php");
//Construyo el query para traer los registros en el select del HTML
$consulta = "SELECT email FROM contactos ORDER BY email";
//Ejecuto el query
$ejecutar_consulta = $conexion->query($consulta);
//Con un while recorro todo los registros generados de la consulta anterior
//Construyo las opciones del select de forma dinámica con los registros de la consulta

while($registro = $ejecutar_consulta->fetch_assoc()) {
  echo "<option value='".$registro["email"]."'";
  if($_GET["contacto_slc"]==$registro["email"]){
    echo " selected";
  }
  echo ">".$registro["email"]."</option>";
}
//$conexion->close();
?>