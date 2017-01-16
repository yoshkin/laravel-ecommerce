# Laravel Based Ecommerce CMS

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Pack for production ENV contains
- "laravel/framework": "5.3.*"
- "backpack/base": "^0.7.14"
- "backpack/crud": "^3.1"

## Pack for development (local) ENV additionaly contains
- "backpack/generators": "^1.1",
- "laracasts/generators": "^1.1"

## Installation

- First - clone repo
```
git clone https://github.com/yoshkin/chiaroecom.git
```

- Second - update packages
```
composer update
```

- Create your .env and setup it (sql)
- Make you new key
```
php artisan key:generate
```

- Migrate sql queries
```
php artisan migrate
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
