<h1 class="nombre-pagina">Nuevo Servivio</h1>
<p class="descripcion-pagina">Llena todo los campos para añadir un nuevo Servicio</p>

<?php 
   include_once __DIR__ . '/../templates/barra.php';
   include_once __DIR__ . '/../templates/alertas.php';
?>


<form action="/servicios/crear" method="post" class="formulario">
   <?php include_once __DIR__ . '/formulario.php'; ?>
   <input type="submit" value="Guardar Servicio" class="boton">
</form>