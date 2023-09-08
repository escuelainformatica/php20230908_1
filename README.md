# crear proyecto de laravel
1) en la linea de comando, ir a la carpeta de proyectos
2) luego, ejecutar lo siguiente: (cambiando php20230908_1 por el nombre del proyecto)

```
composer create-project laravel/laravel php20230908_1
```

3) una vez instalado, abrir la carpeta en visual studio.

# en visual studio
Abri una terminal y ejecute lo siguiente

```
php artisan serve
```

Y abrir la pagina http://127.0.0.1:8000/ para ver si funciona

## Y se puede descargar el proyecto
Si no tiene generada la carpeta vendor/ ejecute lo siguiente en la terminal

```
composer install
```

# Ejercicio 1

* Cree un proyecto laravel nuevo.
* Abralo en visual studio code
* Y agregue una ruta llamada "/clientes" que muestre una lista de clientes (rut,nombre,apellido)
* Agregue otra ruta llamada "/compras" que muestra una tabla de compras (producto,precio)
* Agregue otra ruta llamada "/totales" que muestra dos variables: $total=100, $iva=19.5

> Nota: no olvide crear las vistas en la carpeta /resources/views y las vistas tienen que tener extension .blade.php

