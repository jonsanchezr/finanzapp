# FINANZAPP

Proyecto con Laravel 8.x y VueJS 2.x.

- Lenguaje [PHP 7.4](https://www.php.net/)
- Base de Datos [MySQL](https://www.mysql.com/)
- Desarrollo Front con [VueJS](https://vuejs.org/)
- Autenticación con [Laravel Sanctum](https://laravel.com/docs/8.x/sanctum)
- Compilador de assets con [Laravel Mix](https://laravel.com/docs/7.x/mix)
- Estilos con [Sass](https://sass-lang.com/)
- Control de código con Linters [PHP-CS](https://github.com/squizlabs/PHP_CodeSniffer), [Eslint](https://eslint.org/) y [StyleLint](https://stylelint.io/)
- Testing Backend con [Phpunit](https://phpunit.de/)
- Testing Front con [Laravel Dusk](https://laravel.com/docs/5.6/dusk)
- Integración Continua con los Pipelines de [BitBucket](https://bitbucket.org/mkdit/erp/src/master/)

## Requisitos
Es necesario cumplir con los siguientes requisitos:

- Desarrollo local con [Xampp](https://www.apachefriends.org/es/index.html)
- Tener instalado [Composer](https://getcomposer.org/)
- Tener instalado [NodeJS](https://nodejs.org/en/)
- Un Editor como [Visual Studio Code](https://code.visualstudio.com/)
- Tu clave [SSH](https://git-scm.com/book/en/v2/Git-on-the-Server-Generating-Your-SSH-Public-Key)

### Requisitos de Sistema
Solo para linux

- Extensión SOAP `sudo apt-get install php7.0-soap`
- Extensión SQLite `sudo apt-get install ext-sqlite3`
- Extensión XML `sudo apt-get install php-xml`

## Repositorio
Lo primero que se debe de hacer, es descargar el Repositorio en nuestra máquina local.

`C:\xampp\htdocs`

`git clone https://github.com/jonsanchezr/finanzapp.git`

**Nota:** Será necesario configurar una clave SSH para poder clonar el Repositorio.

> Se debe trabajar en la rama develop: `git checkout develop`

### Usuario Git
Se debe configurar el usuario del Repositorio local mediante:

`git config user.name "TuNombre"`

`git config user.email "TuEmail@example.com"`

### Ramas
Existen dos ramas principales:

- main: Dónde se encuentra el código de Producción
- develop: La rama que utilizamos para desarrollar en local. Se debe hacer pull de esta rama para mantenerse actualizado.

Para desarrollar nuevas funcionalidades:

- features: Una rama por cada feature, debe nombrarse como 'ft/<nombre>'
- hotfixes: Una rama por cada bug, debe nombrarse como 'hf/<nombre>'

## Xampp
Lo más cómodo es usar xampp. Este levantará un entorno con todo lo necesario para
realizar un desarrollo local completo.

- Instalar [Xampp](https://www.apachefriends.org/es/index.html)

Ejemplo de configuración del **C:\xampp\apache\conf\extra\httpd-vhosts.conf**

````
<VirtualHost *:80>
    ServerAdmin webmaster@finanzapp.test
    DocumentRoot "C:/xampp/htdocs/finanzapp/public"
    ServerName finanzapp.test
    ServerAlias www.finanzapp.test
    ErrorLog "logs/finanzapp.test-error.log"
    CustomLog "logs/finanzapp.test-access.log" common
</VirtualHost>
````

## Archivo hosts
Windows **C:\windows\System32\drivers\etc\hosts**

Linux **/etc/hosts**

````
127.0.0.1 finanzapp.test
````

### Base de Datos
Se debe crear la Base de Datos **finanzapp**.

## Setup
Una vez descargado el Repositorio del proyecto, se deben ejecutar los siguientes comandos para realizar el setup:

### Dependencias
 
- Instalar dependencias Back con `composer install`

- En la máquina local, instalar dependencias Front con `npm install` ó `yarn install`

- En Ubuntu, deberemos instalar `apt-get install libpng-dev -y --no-install-recommends`

### Configuración

- Generar la clave de la aplicación con:

 `php artisan key:generate`

## Desarrollo Front
Finalmente podremos compilar todo el front utilizando **Laravel Mix** con:

`npm run dev`

Podemos hacer que **Webpack** observe los ficheros front y recompile automáticamente con:

`npm run watch`

También podemos habilitar el **HotReload** con: 

`npm run hot`

### Variables de Entorno

Hay que copiar el archivo **.env.example** como **.env** en la misma ruta y modificar su contenido
según corresponda. Las variables más importantes a modificar son:

- APP_URL=finanzapp.test
- DB_DATABASE=finanzapp
- DB_USERNAME=finanzapp
- DB_PASSWORD=finanzapp

## Mailtrap
Es recomendable crear una cuenta en Mailtrap para el desarrollo local. Mailtrap será un buzón de correo ficticio a donde
se enviarán todos los emails de la Aplicación.

- MAIL_MAILER=smtp
- MAIL_HOST=smtp.mailtrap.io
- MAIL_PORT=2525
- MAIL_USERNAME=
- MAIL_PASSWORD=

## Setup de Base de Datos MySQL
La Base de Datos está definida mediante migraciones y seeders de Laravel. Para montarla, desde la máquina virtual:

`php artisan migrate`

Y para rellenar con datos de prueba:

`php artisan db:seed` 

También se pueden hacer ambas cosas a la vez con:

`php artisan migrate --seed`

Para reconstruirla

`php artisan migrate:fresh`

Para reconstruir y rellenar con datos:

`php artisan migrate:fresh --seed`

## Linters (no activo)
El proyecto posee un setup de tres linters, para PHP, JS y CSS.

- PHP: `composer php-lint`
- JS: `composer js-lint`
- CSS: `composer style-lint`

Para ejecutar todos a la vez:
`composer lint`
 
Todos los comandos añaden la opción `--fix` para aplicar una auto corrección siempre que sea posible.

## Testing
Los test para el Back se encuentran en el directorio __tests__ y se ejecutan mediante **PhpUnit**, 
atendiendo al archivo de configuración **phpunit.xml**

Se puede ejecutar toda la suit de tests con:
 
 `vendor/bin/phpunit`
 
 Para filtrar por clases:
 
 `vendor/bin/phpunit --filter [CLASE]`
 
 Los test front end no están desarrollados, pero si están configurados para correr bajo Laravel Dusk. Se pueden ejecutar
 con:
 
 `php artisan dusk`

## Live App
App de Desarrollo:
https://finanzapp.estudio2b.net

App de Producción:

## Licencia
No definida

## Autor
Jonathan Sanchez Rodriguez - jsanchez@estudio2b.dev