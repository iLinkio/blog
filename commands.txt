* install composer from here 

```shell
https://getcomposer.org/Composer-Setup.exe
```

* install xampp with php 8.0

```shell
https://www.apachefriends.org/download.html
```

* download and install Node JS

```shell
https://nodejs.org/en/download/
```

* Enable mysql in xampp

* Command to create a new project of laravel

```shell
composer create-project laravel/laravel example-app
```

* copy .env.exmaple and rename it to .env
* add database details in .env

* launch server
```shell
php artisan serve
```  
* for making model

```shell
php artisan make:model admin/Post
``` 

* makes model -c makes controller -r makes resources(function in controller) -m makes migration
```shell
php artisan make:model admin/Post -m -c -r
```  

* makes controller
```shell
php artisan make:controller  admin/PostController
``` 

* makes controller -r makes resources(default functions in controller)
```shell
php artisan make:controller admin/PostController -r
``` 


* makes migration
```shell
php artisan make:migration
```  

* Install laravel breeze to add login functionality  
https://laravel.com/docs/8.x/starter-kits#laravel-breeze
```shell
composer require laravel/breeze --dev
php artisan breeze:install

npm install
npm run dev
php artisan migrate
```  
* Install laravel Debugbar  
https://github.com/barryvdh/laravel-debugbar
```shell
composer require barryvdh/laravel-debugbar --dev
```  

* Install Pretty route web
https://github.com/garygreen/pretty-routes
```shell
composer require garygreen/pretty-routes --dev

use it through: 127.0.0.1:8000/routes
```  

* Install Pretty route command
https://github.com/Wulfheart/pretty-routes
```shell
composer require wulfheart/pretty_routes

use it through:

php artisan route:pretty

```  

* Install Make Service command
https://github.com/getsolaris/laravel-make-service-command
```shell
composer require getsolaris/laravel-make-service


use it through:

php artisan make:service PostService

```  

* Install Laratrust for roles and permission
https://laratrust.santigarcor.me/docs/6.x/installation.html
```shell
composer require santigarcor/laratrust
php artisan config:clear
php artisan vendor:publish --tag="laratrust"
php artisan laratrust:setup
composer dump-autoload
php artisan migrate

```  


