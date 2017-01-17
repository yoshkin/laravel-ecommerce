# LaravelEcommerce

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Pack for production ENV contains
- "laravel/framework": "5.3.*" (Laravel Framework)
- "backpack/base": "^0.7.14" (Backpack Base package)
- "backpack/crud": "^3.1" (Backpack CRUD package)
- "backpack/settings": "^2.0" (Backpack Settings CRUD Model + Controller)
- "backpack/pagemanager": "^1.1" (Backpack Page CRUD Model + Controller + PageTemplate + PagesController)
- "cviebrock/eloquent-sluggable": "^4.1" (Create slugs automaticaly)
- "backpack/permissionmanager": "^2.1" (Backpack Permission Manager - [Usage 1](https://github.com/Laravel-Backpack/PermissionManager#using-permissions) and [Usage 2](https://github.com/spatie/laravel-permission#usage))
- Menu CRUD Model + Controller
- News (Articles + Categories + Tags) CRUD Models + Controllers
- Products (Categories + Brands + Products) CRUD Models + Controllers + Requests

## Pack for development (local) ENV additionaly contains
- "backpack/generators": "^1.1" (console backpack crud generator)
- "laracasts/generators": "^1.1" (for more info see "php artisan list"
- "barryvdh/laravel-ide-helper": "^2.2"
- "barryvdh/laravel-debugbar": "^2.3"

## Installation

- First - clone repo (Run in your terminal - you need git installed) and change dir to your project
```
git clone https://github.com/yoshkin/chiaroecom.git yourproject.dev
cd yourproject.dev
```

- Second - install packages, create .env, generate KEY and update packages (Run in your "yourproject.dev" folder)
```
php -r "file_exists('.env') || copy('.env.example', '.env');"
composer install
php artisan key:generate
composer update
```

- Setup (change it) your ENV sql connection (.env)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

- Migrate sql queries + DB demo seeds for Settings Model (Run in your "yourproject.dev" folder)
```
php artisan migrate
php artisan db:seed --class="Backpack\Settings\database\seeds\SettingsTableSeeder"
```

- Maybe you need to change folders permissions (Run in your "yourproject.dev" folder)
```
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```

- Activate Laravel Framework plugin in PHPStorm
```
Settings -> Laravel -> Enable for this project
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
Backpack is free for non-commercial use and $19/project for commercial use. Please see [License File](https://github.com/Laravel-Backpack/Base/blob/master/LICENSE.md) and [backpackforlaravel.com](https://backpackforlaravel.com/#pricing) for more information.
