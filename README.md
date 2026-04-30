"Seeders y Validación"

-Configuración de Seeders

Se crearon los siguientes seeders:

* UserSeeder: usuarios admin y cliente
* CategorySeeder: categorías
* ProductSeeder: productos

Se registraron en DatabaseSeeder.php.

-Datos generados

* 2 administradores  
* 4 clientes  
* 3 categorías  
* 8-10 productos  

-Ejecución

Se ejecutó:

php artisan migrate:fresh --seed

-Verificación

* Los productos se muestran correctamente  
* El login funciona  
* Solo el admin accede a gestión de productos  































---

