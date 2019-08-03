# CRUD Simple de Laravel
## Utilizando Laravel 5.8

![Archivo no Encontrado](https://i2.wp.com/storage.googleapis.com/blog-images-backup/1*2gKr79YTmj2MkP8zLOn-bg.png?resize=1201%2C401&ssl=1)


### Descripción

Es un simple CRUD de Laravel que actualmente muestra la información de diferentes consultas.\
Prontamente funciones (Create, Read, Update, Delete).

### Updates
- [x] 4 Tipos de Consultas utilizando ORM Eloquent. **(02 Agosto 2019)**
- [ ] Crear función Insertar Registros
- [ ] Crear función Eliminar Registros
- [ ] Crear función Editar Registros
- [ ] Crear función Actualizar Registros


### Descarga

* **Primero**, clone el proyecto

`git clone https://github.com/Vikktor93/PruebaLaravel.git`


* **Segundo**, descargue ![Bootstrapp 4.3](https://getbootstrap.com/docs/4.3/getting-started/download/]) y póngalo en una carpeta públic.

* **Tercero,** agregue e instale

```
# Instala las dependencias
composer install

```

* **Cuarto**, cree la Base de Datos

* **Quinto:**

```
# Crear el .env y configurarlo
cp .env.example .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= nombre de tu BD
DB_USERNAME= tu username
DB_PASSWORD= tu passwors

# Realizar las Migraciones con los respectivos Seeders
php artisan migrate --seed

# Iniciar servicio
php artisan serve

# Acceder a la vista del proyecto
http://localhost:8080 
```




### Nota
Este Crud trabaja con la BD MySQL. Si desea usar otro motor de BD, 
puede establecer la configuración en **config / database.php**
