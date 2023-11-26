<?php
$conexion = mysqli_connect("localhost","root","") or die("No se pudo conectar con el servidor de BD");
echo "Conectado al servidor de BD MySQL <br/>";

mysqli_select_db($conexion, "mis_contactos") or die("No se pudo seleccionar la BD <br/>");
echo "BD seleccionada: <b>mis_contactos</b><br/>";
echo "<h1>Las 4 operaciones básicas a una BD</h1>";
echo "<h2>1)INSERCIÓN DE DATOS</h2>";

//INSERT INTO nombre_tabla (campos_tabla) values (valores_campos)

$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('macpdleonr@gmail.com','Mac','M','1992-08-13','51983518195','Peru','mac.png')";

$ejecutar_consulta = mysqli_query($conexion, $consulta);

$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('macpdeleonr@gmail.com','Mac','M','1992-08-13','51983518195','Peru','mac.png')";

$ejecutar_consulta = mysqli_query($conexion, $consulta);

echo "Se han insertado los datos =D<br/>";

echo "<h2>2)ELIMINACIÓN DE DATOS</h2>";
//DELETE FROM nombre_tabla WHERE campo = valor
$consulta = "DELETE FROM contactos WHERE email = 'macpdleonr@gmail.com'";
$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "Datos eliminados :c<br/>";

echo "<h2>3)MODIFICACIÓN DE DATOS</h2>";
//UPDATE nombre_tabla SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor

$consulta = "UPDATE contactos SET email = 'macpdleonr@gmail.com' WHERE email = 'macpdeleonr@gmail.com'";
$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "Los datos han sido modificados :D<br/>";

echo "<h2>4)CONSULTA DE DATOS</h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor
$consulta = "SELECT * FROM contactos WHERE nombre = 'Mac'";
$ejecutar_consulta = mysqli_query($conexion, $consulta);

echo "<h3>Consulta que trae todos los registros de la tabla con el nombre name = 'Mac'</h3>";

while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
  echo $registro["email"] . "---";
  echo $registro["nombre"] . "---";
  echo $registro["sexo"] . "---";
  echo $registro["nacimiento"] . "---";
  echo $registro["telefono"] . "---";
  echo $registro["pais"] . "---";
  echo $registro["imagen"] . "---";
  echo "<br/>";
}

$consulta = "DELETE FROM contactos WHERE email = 'macpdleonr@gmail.com'";
$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "Datos eliminados :c<br/>";

mysqli_close($conexion);
echo "Conexion Cerrada";

?>