# Ecommerce Laravel - Proyecto

Este proyecto consiste en el desarrollo de un sistema básico de comercio electrónico utilizando Laravel. Incluye funcionalidades como registro de usuarios, inicio de sesión y base para la gestión de productos.

---

## Tecnologías utilizadas

* PHP 8.2
* Laravel
* Composer
* Node.js
* XAMPP (MySQL)

---

## Instalación del proyecto

1. Clonar el repositorio:

git clone https://github.com/Montsejr/ecommerce-laravel.git

2. Entrar a la carpeta del proyecto:

cd ecommerce-laravel

3. Instalar dependencias de Laravel:

composer install

4. Instalar dependencias de frontend:

npm install
npm run build

5. Configurar archivo `.env`:

Copiar el archivo `.env.example` y renombrarlo a `.env`, luego configurar:

DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=

6. Generar clave de la aplicación:

php artisan key:generate

7. Ejecutar migraciones:

php artisan migrate

---

## Ejecutar el proyecto

Para iniciar el sistema, ejecutar:

php artisan serve

Después abrir en el navegador:

http://127.0.0.1:8000

---

## Funcionalidades actuales

* Registro de usuarios
* Inicio de sesión
* Base del sistema Ecommerce

---

## Notas

Este proyecto se ejecuta de manera local, por lo que es necesario tener activo XAMPP (Apache y MySQL).

---

