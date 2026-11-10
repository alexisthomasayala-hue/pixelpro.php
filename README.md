🎮 PixelPro - Migración a PHP, SSI y SSR (Unidad 4)

📝 Descripción del Proyecto

Este proyecto corresponde al Hito 2 de la asignatura Programación Web. Consiste en la evolución del sitio web estático PixelPro🎮 a una aplicación web dinámica desarrollada en PHP.

Se aplicó la técnica de Server Side Includes (SSI / Modularización) para eliminar la duplicación de código en la estructura global, se configuraron títulos dinámicos mediante Server-Side Rendering (SSR) y se integró un esquema de manejo de variables de entorno (.env).

🎨 Prototipo de Diseño

Figma:https://www.figma.com/design/RPxIiQw6JVvziXeSx4YnGI/Sin-t%C3%ADtulo?node-id=14-16

🛠️ Tecnologías Utilizadas

Lenguaje principal: PHP 8.x

Maquetado y Estilos: HTML5, CSS3 (todo.css)

Lógica de Cliente: JavaScript (todo.js)

Entorno Servidor Local: XAMPP / Laragon (Apache)

Control de Versiones: Git & GitHub

📁 Estructura del Proyecto

pixelpro/
├── config/
│   └── env.php              # Definición de variables globales y de entorno
├── includes/
│   ├── header.php           # Etiqueta <head>, CSS y lógica de $titulo_pagina
│   ├── nav.php              # Menú de navegación global unificado
│   └── footer.php           # Cierre del <body> y scripts de JS
├── img/                     # Recursos multimedia e imágenes
├── .env.example             # Plantilla de variables de entorno de ejemplo
├── .gitignore                # Exclusión de archivos sensibles
├── todo.css                 # Estilos globales
├── todo.js                  # Lógica JavaScript
├── index.php                # Página principal (Sobre Nosotros)
├── blog.php                 # Blog de noticias Castor7
├── configuracion.php        # Configuración de usuario
├── contactos.php            # Información de contactos
├── curso.php                # Cursos de la academia
├── deseas unirte.php        # Sección de postulación
├── formulario.php           # Formulario de registro
├── generos.php              # Géneros de videojuegos
├── logo.php                 # Identidad de la empresa
├── noticias.php             # Sección de noticias
├── opiniones.php            # Reseñas de usuarios
├── perfil jugador.php       # Perfil del jugador
├── precios.php              # Precios y membresías
├── preguntas.php            # Preguntas frecuentes
├── ranking.php              # Ranking de ventas
├── ubicacion sucursal.php   # Ubicación de sucursal
└── README.md                # Documentación del repositorio


⚙️ Instrucciones de Instalación y Ejecución Local

Clonar el repositorio:

git clone https://github.com/alexisthomasayala-hue/Pixelpro.php.git


Copiar al servidor local:

Mueve la carpeta del proyecto a la ruta raíz de tu servidor web local:

XAMPP: C:/xampp/htdocs/Pixelpro

Laragon: C:/laragon/www/Pixelpro

Variables de Entorno:

Copia .env.example y renómbralo a .env si utilizas cargador de variables de entorno, o verifica el archivo config/env.php.

Iniciar el Servidor:

Inicia el servicio Apache desde el panel de control de XAMPP o Laragon.

Acceder desde el navegador:

Abre tu navegador web e ingresa a: http://localhost/Pixelpro/index.php

