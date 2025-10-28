NOMBRE:	    EDWIN HUANCA ARO
DOCENTE:	VICTOR HUGO PÉREZ
MATERIA:	TÉCNOLOGIAS DE INTERNET

# Examen Tecnologías de Internet - Backend (Laravel 9)

## Guía de Ejecución

1.  **Clonar el repositorio.**
2.  **Instalar dependencias:** `composer install`
3.  **Configurar BD:** Editar el archivo `.env` con las credenciales de MySQL.
4.  **Preparar la BD:** `php artisan migrate:fresh --seed`
5.  **Iniciar Servidor:** `php artisan serve` (La API estará en `http://127.0.0.1:8000`)

## Endpoints

* **Listar Empleados:** `GET /api/empleados`
* **Crear Empleado:** `POST /api/empleados` (Requiere `nombre`, `apellido`, `correo`, `salario`)