<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$op = $_GET["op"];
switch ($op) {
  case 'alta':
    $contenido = "php/alta-contacto.php";
    $titulo = "Alta de Contactos";
    break;
  case 'baja':
    $contenido = "php/baja-contacto.php";
    $titulo = "Baja de Contactos";
    break;
  case 'cambios':
    $contenido = "php/cambios-contacto.php";
    $titulo = "Cambios a Contacto";
    break;
  case 'consultas':
    $contenido = "php/consultas-contacto.php";
    $titulo = "Consultas a Contacto";
    break;
  default:
    $contenido = "php/home.php";
    $titulo = "Mis Contactos";
    break;
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/mis-contactos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/mis-contactos.js"></script>
  </head>
  <body>
    <section id="contenido">
      <nav>
        <ul>
          <li><a class="cambio" href="index.php">Home</a></li>
          <li><a class="cambio" href="?op=alta">Alta de Contacto</a></li>
          <li><a class="cambio" href="?op=baja">Baja de Contacto</a></li>
          <li><a class="cambio" href="?op=cambios">Cambios de Contactos</a></li>
          <li><a class="cambio" href="?op=consultas">Consultas de Contactos</a></li>
        </ul>
      </nav>
      <section id="principal">
        <?php
        include($contenido);
        ?>
      </section>
    </section>
  </body>
</html>