<p align="center">
<a href="https://github.com/MarcoAtencio/JuventudGlobalizada" ><img src="https://github.com/MarcoAtencio/JuventudGlobalizada/blob/master/public/img/resource/logo.png" alt="LOGO" with="250"></a>
</p>

# Introduccion

_Una Intranet en donde los empleados pueden marcar su asistencia y su salida, se les dará un seguimiento a los empleados y a los usuarios._## Comenzando 🏅

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._


### Pre-requisitos 📋

```
PHP7
```

```
XAMP O WAMP
```

```
Node
```

```
Laravel 6*
```


## Instalación 🔧

_Ejecuta estos comandos_

```
$ composer install
```

```
$ cp .env.example .env
```

_Inicia el MYSQL de tu WAMP O XAMP_

```	
$ php artisan migrate --seed
```

```
npm install
```

```
$ php artisan tinker
```

```
use Spatie\Permission\Models\Role;

$role = Role::create(['name' => 'SuperAdmin']);

$user = User::find(2);

$user->assignRole('SuperAdmin');
```

## Ejecucion ⚙

_Ejecuta estos comandos_

```
$ composer artisan serve
```

_En tu browser favorito_

```
127.0.0.1:8000
```


## Autorización 🕵‍

_Usuario de prueba_

```
User@example.com    user
```

_Usuario con todos los privilegios_

```
Admin@example.com   admin
```

_DNI Empleado_

```
98765432
```
# Example

<img src="https://github.com/MarcoAtencio/JuventudGlobalizada/blob/master/public/img/readme/Attendance.png" alt="LOGO" style="max-width:75%;">

<img src="https://github.com/MarcoAtencio/JuventudGlobalizada/blob/master/public/img/readme/Login.png" alt="LOGO" style="max-width:75%;">

<img src="https://github.com/MarcoAtencio/JuventudGlobalizada/blob/master/public/img/readme/Maintenance.png" alt="LOGO" style="max-width:75%;">


## Autores ✒

* **Atencio Marco** - *Desarrollador* - [Marco](https://github.com/MarcoAtencio)

