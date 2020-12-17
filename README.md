# Derecho

#### Setup

Para crear la DB deben correr el script sql que se encuentra en la carpeta sql, creará la DB **derecho** con una tabla **users**.

Por defecto las credenciales del admin de la db son vacias, si no es el caso con su instalacion mysql/mariadb o el puerto es distinto, cambie las credenciales en el archivo **_database.php_**

```php
$server = 'localhost:3306';
$username = '';
$password = '';
```

#### Uso

En cualquier archivo php que necesiten los datos del usuario, deben de insertar al inicio:

```php
session_start(); // -> Recupera la variable $_SESSION.
```

Existe un objeto llamado `$conn` que es la encargada de manipular/consultar la DB, si se requiere utilizarla despues del punto anterior deben de insertar esta linea:

```php
require 'database.php'; // -> Recupera la conexion ($conn).
```

La variable del usuario con su _user_id_ & _email_ se guarda en la variable global `$_SESSION` de php con sus respectivas llaves, por comodidad en cualquier archivo php que necesiten del usuario pueden poner la siguiente linea y el usuario quedará guardado en el array `$user`
[Ver ejemplo en index](https://github.com/manuelbatres/derecho/blob/main/index.php#4):

```php
$user = (isset($_SESSION['user_id'])) ? ['user' => $_SESSION['user_id'], 'email' => $_SESSION['email']] : null;
```

> Si no hay usuario logueado el array será nulo.

La libreria fpdf link de descarga

https://drive.google.com/drive/folders/18SO8ps5ApwKVh8z3jAO6bkbz1_RQL9dE?usp=sharing
