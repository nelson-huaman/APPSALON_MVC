<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Ingrese tu nuevo Password a continuacion</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<?php if ($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Nuevo Password</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu password"
        >
    </div>
    <input type="submit" class="boton" value="Guardar Nuevo Password">
</form>

<div class="acciones">
    <a href="/">¿ya tienes una Cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una Cuenta? Crear una</a>
</div>