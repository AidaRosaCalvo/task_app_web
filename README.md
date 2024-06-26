# task_app_web

Este repositorio contiene una aplicación ToDo desarrollada en Laravel 10, utilizando el motor de plantillas Blade. La aplicación permite gestionar tareas, incluyendo la capacidad de agregar nuevas tareas, eliminarlas, marcarlas como realizadas y ver detalles específicos de cada tarea.

## Requisitos

Para ejecutar esta aplicación en tu entorno local, necesitarás tener instalado:

- PHP >= 7.4
- Composer
- Node.js y NPM
- Servidor web (por ejemplo, Apache, Nginx) con soporte PHP

## Instalación

Sigue estos pasos para configurar el proyecto en tu máquina:

1. **Clonar el repositorio:**

   ```
   git clone https://github.com/AidaRosaCalvo/task_app_web.git
   cd task_app_web
   ```

2. **Instalar dependencias de PHP:**

   ```
   composer install
   ```

3. **Instalar dependencias de JavaScript:**

   ```
   npm install && npm run dev
   ```

4. **Configurar el archivo de entorno:**

   ```
   cp .env.example .env
   php artisan key:generate
   ```

   Asegúrate de configurar la conexión a la base de datos y cualquier otra configuración necesaria en el archivo `.env`.

5. **Ejecutar migraciones y seeders:**

   ```
   php artisan migrate --seed
   ```

   Esto creará las tablas necesarias en la base de datos y sembrará algunos datos de ejemplo.

6. **Iniciar el servidor de desarrollo:**

   ```
   php artisan serve
   ```

   La aplicación estará disponible en `http://localhost:8000`.

## Uso

Una vez que la aplicación esté configurada y en funcionamiento, puedes comenzar a utilizarla:

- **Agregar una tarea:** Haz clic en el botón para agregar una nueva tarea, completa los detalles y guarda.
- **Eliminar una tarea:** Cada tarea tiene la opción de eliminarla.
- **Marcar como realizada:** Marca una tarea como realizada para indicar que está completa.
- **Ver detalles de una tarea:** Haz clic en una tarea para ver todos sus detalles y editar si es necesario.

## Contribuir

Si quieres contribuir a este proyecto, siéntete libre de hacer un fork y enviar pull requests. Agradecemos cualquier tipo de mejora o corrección de errores.

## Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).
