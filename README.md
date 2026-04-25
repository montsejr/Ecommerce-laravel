# Ecommerce Laravel

## Requisitos
- PHP 8.2
- Composer
- Node.js
- XAMPP (MySQL)

## Instalación

1. Clonar el repositorio:
git clone https://github.com/Montsejr/ecommerce-laravel.git

2. Entrar al proyecto:
cd ecommerce-laravel

3. Instalar dependencias:
composer install

4. Instalar frontend:
npm install
npm run build

5. Configurar archivo .env:
Copiar .env.example a .env y configurar la base de datos:

DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=

6. Generar clave:
php artisan key:generate

7. Ejecutar migraciones:
php artisan migrate

8. Ejecutar servidor:
php artisan serve

## Acceso
http://127.0.0.1:8000

## Funcionalidades
- Registro de usuarios
- Login
- Sistema base Ecommerce