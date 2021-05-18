<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Spam prevention using Honeypot technique in Laravel

There is Honeypot folder in the app directory where you will find all the code.
- config: this folder contains configuration for field and minimum time for form submitting.
- View: folder contains template for injection.
- BlockSpam.php: is a middleware.
- Honeypot.php: act as a service class.
- HoneypotServiceProvider: is a service provider.

For testing purpose, the add post component is directly loaded in the dashboard view and post saving is done in the web.php file and Sqlite database is used.

## Setup

- Clone the repo.
- Create .env file and copy contents from .env.example.  
-  To set up sqlite database then run ``touch database/database.sqlite``  or configure mysql connection.
- Run `` composer install ``
- Run ``npm install && npm run dev``
- run ``php artisan migrate``
- Run ``php artisan serve``

For auth scaffolding, The laravel Breeze is used.
