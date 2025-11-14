<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Resumen del Proyecto

Plataforma para planear y gestionar campeonatos deportivos. Permite crear campeonatos, registrar equipos y jugadores, programar partidos, registrar resultados y generar posiciones/estadísticas.

## Librerías principales

-   `php`: Requisito de la versión de PHP (>= 8.2).
-   `laravel/framework`: Framework principal usado para la aplicación (Laravel 12).
-   `laravel/tinker`: Consola interactiva (REPL) para inspeccionar y probar código en tiempo de ejecución.
-   `ramsey/uuid`: Generación y manejo de UUIDs para identificadores únicos.
-   `spatie/laravel-permission`: Gestión de roles y permisos, control de acceso basado en permisos y roles.

### Dependencias de desarrollo (require-dev)

-   `barryvdh/laravel-debugbar`: Barra de depuración para mostrar consultas, variables y rendimiento en desarrollo.
-   `fakerphp/faker`: Generador de datos falsos para pruebas y seeders.
-   `laravel/breeze`: Scaffolding ligero de autenticación (login/register) para desarrollo rápido.
-   `laravel/pail`: Utilidades de desarrollo proporcionadas por Laravel (ayuda en tareas de desarrollo como manejo de logs/colas en entorno local).
-   `laravel/pint`: Formateador y linting de código PHP con reglas opinionadas por Laravel.
-   `laravel/sail`: Entorno de desarrollo local basado en Docker para proyectos Laravel.
-   `mockery/mockery`: Biblioteca para crear mocks en pruebas unitarias.
-   `nunomaduro/collision`: Mejora la presentación de excepciones en la consola para facilitar debugging.
-   `phpunit/phpunit`: Framework de pruebas para ejecutar tests automatizados.

### Instalación rápida

1. Copiar dependencias y crear archivo de entorno:

```shell
composer install
cp .env.example .env
php artisan key:generate
```

2. Ejecutar migraciones y poblar datos (si aplica):

```shell
php artisan migrate
php artisan db:seed
```

3. Desarrollo frontend / assets:

```shell
npm install
npm run dev
```
