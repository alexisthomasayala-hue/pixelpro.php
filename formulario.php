<?php
$titulo_pagina = "Registro | PixelPro🎮";
require_once 'includes/header.php';
?>

    <!-- Interruptor de Modo Oscuro (Opcional en la página) -->
    <div style="padding: 10px;">
        <label>
            <input type="checkbox" id="modoOscuroToggle"> Modo Oscuro
        </label>
    </div>

    <!-- Formulario SIN action ni method para evitar errores de servidor -->
    <form id="formRegistro" novalidate>
        <h1>PixelPro🎮 - Registro de Usuario</h1>

        <div>
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre">
            <span id="errorNombre" class="error-mensaje"></span>
        </div>

        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email">
            <span id="errorEmail" class="error-mensaje"></span>
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <span id="errorPassword" class="error-mensaje"></span>
        </div>

        <div>
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>

        <div style="margin-bottom: 15px; border:none; padding:0;">
            <label style="display:block; margin-bottom: 5px;">Género:</label>
            <input type="radio" id="femenino" name="genero" value="femenino">
            <label for="femenino" style="margin-right: 15px;">Femenino</label>
            <input type="radio" id="masculino" name="genero" value="masculino">
            <label for="masculino">Masculino</label>
        </div>

        <div style="border:none; padding:0; margin-bottom: 15px;">
            <input type="checkbox" id="terminos" name="terminos">
            <label for="terminos">Acepto los términos y condiciones</label>
            <span id="errorTerminos" class="error-mensaje"></span>
        </div>

        <div>
            <button type="submit">Registrarse</button>
        </div>
        
        <!-- Contenedor donde aparecerá el resumen antes de guardar -->
        <div id="contenedorResumen" style="display: none;"></div>
    </form>

<?php 
require_once 'includes/nav.php';
require_once 'includes/footer.php'; 
?>