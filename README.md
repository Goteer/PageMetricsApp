# BroobeChallenge
Desarrollo requerido como prueba tecnica por la empresa Broobe


## Acceso a mysql
Se espera que exista la siguiente base de datos:
```
DB_DATABASE=webpage_metrics
```
La aplicacion espera el siguiente usuario:
```
DB_USERNAME=app_access
DB_PASSWORD=nAy4RDV$@8rPw25K
```
Los permisos otorgados al usuario son especificos a la DB webpage_metrics, y no incluyen administracion.
```
SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, CREATE TEMPORARY TABLES, CREATE VIEW, EVENT, TRIGGER, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EXECUTE 
```

# Configuración inicial

## Requisitos
- PHP >= 8.1
- Base de datos Mysql


## Comandos iniciales

Inicialmente la base de datos requiere algunas tablas y valores. Podemos inicializarlos utilizando artisan:
```
php artisan migrate:fresh --seed
```