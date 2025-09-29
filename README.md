# WordPress Development Environment

Este es un ambiente de desarrollo para WordPress utilizando Docker Compose, optimizado para trabajar con GitHub Codespaces.

## Estructura del Proyecto

```
.
├── wp-content/           # Carpeta sincronizada con WordPress
│   ├── plugins/         # Plugins personalizados
│   ├── themes/          # Temas personalizados
│   └── uploads/         # Archivos subidos
├── docker-compose.yml   # Configuración de contenedores
├── nginx.conf          # Configuración de Nginx
└── README.md           # Este archivo
```

## Contenedores

El ambiente incluye:
- WordPress (FPM)
- Nginx (para servir WordPress)
- MySQL 5.7
- phpMyAdmin

## Puertos

- WordPress: 8080
- phpMyAdmin: 8081

## Credenciales

### Base de datos
- Usuario: wp
- Contraseña: wp
- Base de datos: wp
- Root password: rootpassword

## Inicio Rápido

1. Inicia los contenedores:
   ```bash
   docker compose up -d
   ```

2. Accede a:
   - WordPress: https://TUPUERTO-8080.TUCODESPACE.GITHUB.DEV
   - phpMyAdmin: https://TUPUERTO-8081.TUCODESPACE.GITHUB.DEV

## Plugin Hola Copilot

El plugin incluido proporciona un shortcode simple para mostrar un saludo animado.

### Uso del Shortcode

Inserta el siguiente shortcode en cualquier página o entrada:

```
[hola_copilot]
```

### Características del Plugin
- Mensaje de bienvenida animado
- Estilos CSS incluidos
- Diseño responsivo

## Desarrollo

Los archivos en `wp-content` están sincronizados con el contenedor de WordPress. Cualquier cambio que hagas en estas carpetas se reflejará inmediatamente en el sitio.
Este es un repositorio demo y estoy trabajando sobre la rama dev