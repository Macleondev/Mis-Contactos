<br/><br/>
<p>Consulta tipo buscador</p>
<div>
  <input type="hidden" name="op" value="consultas" />
  <label for="buscador">Email: </label>
  <input type="search" id="buscador" class="cambio" name="q" placeholder="Escribe tu búsqueda" title="Tu Búsqueda" required />
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar" />
<?php
if ($_GET["q"]!=null) {
  $q = $_GET["q"];
  $consulta = "SELECT * FROM contactos WHERE MATCH(email, nombre, sexo, telefono, pais) AGAINST('$q' IN BOOLEAN MODE)";
  include("tabla-resultados.php");
}
?>