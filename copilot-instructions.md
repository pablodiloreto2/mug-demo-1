# Instrucciones para GitHub Copilot

Este es un proyecto de desarrollo WordPress utilizando Docker en GitHub Codespaces. A continuación, se detalla la estructura y configuración del proyecto para facilitar la asistencia de Copilot.

## Estructura del Proyecto

```
.
├── .devcontainer/          # Configuración de Codespaces
│   └── devcontainer.json  # Configuración del contenedor de desarrollo
├── wp-content/            # Contenido de WordPress
│   ├── plugins/          # Plugins personalizados
│   │   └── hola-copilot/ # Plugin de demostración
│   ├── themes/           # Temas personalizados
│   └── uploads/          # Archivos subidos
├── docker-compose.yml     # Configuración de contenedores
├── nginx.conf            # Configuración de Nginx
└── README.md             # Documentación principal
```

## Configuración de Contenedores

### WordPress (FPM)
- Imagen: wordpress:fpm
- Base de datos: MySQL 5.7
- Configuración especial para Codespaces en WORDPRESS_CONFIG_EXTRA
- Volúmenes:
  - wordpress:/var/www/html (core de WordPress)
  - ./wp-content:/var/www/html/wp-content (contenido personalizado)

### Nginx
- Imagen: nginx:latest
- Puerto: 8080
- Configurado para PHP-FPM
- client_max_body_size: 64M

### Base de Datos
- Imagen: mysql:5.7
- Credenciales:
  - Usuario: wp
  - Contraseña: wp
  - Base de datos: wp
  - Root password: rootpassword

### phpMyAdmin
- Puerto: 8081
- Acceso a MySQL configurado

## Entorno de Desarrollo

### Codespaces
- Base: Ubuntu con Docker outside of Docker (DooD)
- Inicio automático de contenedores
- Extensiones VS Code instaladas:
  - PHP Intelephense
  - Auto Close Tag
  - Auto Rename Tag
  - PHP Debug

### URLs de Acceso
- WordPress: https://[codespace-name]-8080.[codespace-domain]
- phpMyAdmin: https://[codespace-name]-8081.[codespace-domain]

## Plugin Hola Copilot

Plugin de demostración que implementa un shortcode para mostrar un saludo animado.

### Detalles del Plugin
- Nombre: Hola Copilot
- Shortcode: [hola_copilot]
- Características:
  - Mensaje de bienvenida animado
  - Estilos CSS incluidos
  - Diseño responsivo

## Consideraciones para Desarrollo

1. Los archivos en wp-content están sincronizados con el contenedor
2. Los cambios en los archivos se reflejan inmediatamente
3. La persistencia de la base de datos es volátil
4. El acceso a WordPress está configurado para HTTPS en Codespaces
5. La instalación de plugins/temas está habilitada (FS_METHOD direct)

## Convenciones de Commits

Los commits deben ser en español y usar emojis para mejorar la legibilidad y expresividad. Copilot ayudará a generar mensajes de commit significativos basados en los cambios realizados.

### Estructura del mensaje
```
<emoji> <tipo>: <mensaje descriptivo en español>

[cuerpo del commit en español si es necesario]
```

### Tipos de Commits y sus Emojis
- 🎨 `estilo`: Cambios de formato, CSS, UI/UX
- ✨ `feat`: Nueva funcionalidad
- 🐛 `fix`: Corrección de bugs
- 📝 `docs`: Cambios en documentación
- ♻️ `refactor`: Refactorización de código
- 🚀 `perf`: Mejoras de rendimiento
- ✅ `test`: Agregando o modificando tests
- 🔧 `config`: Cambios de configuración
- 🔐 `seguridad`: Relacionado con seguridad
- 🌐 `i18n`: Internacionalización y traducciones
- 🚧 `wip`: Trabajo en progreso
- 🔄 `ci`: Cambios en CI/CD
- 📦 `deps`: Actualizaciones de dependencias
- 🗃️ `db`: Cambios relacionados con la base de datos

### Ejemplos
```
✨ feat: Añadir shortcode [hola_copilot] para mostrar saludo animado
🐛 fix: Corregir redirección en Codespaces para instalación de WordPress
🔧 config: Actualizar configuración de Docker para desarrollo local
📝 docs: Agregar instrucciones de instalación en README
```

## Tareas Comunes

1. Reiniciar contenedores:
   ```bash
   docker compose down && docker compose up -d
   ```

2. Ver logs:
   ```bash
   docker compose logs -f
   ```

3. Acceder al contenedor de WordPress:
   ```bash
   docker compose exec wordpress bash
   ```

4. Verificar estado de los contenedores:
   ```bash
   docker compose ps
   ```