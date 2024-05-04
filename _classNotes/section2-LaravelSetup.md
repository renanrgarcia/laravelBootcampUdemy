# Laravel Setup

## Laravel Installation
- `composer create-project laravel/laravel="10.*" example-app`
  - Create a new Laravel project at x version
- Out of containers you can use `php artisan serve` to start the server
- `composer global require laravel/installer`: 
  - global: to install globally, instead of locally on the project
  - require: key verb in the command. It instructs Composer to perform the action of "requiring" a package
- `laravel new project-name` to create a new Laravel project with a guided wizard

## Cloning project
- `composer install`: to install the dependencies
- COPY `.env.example` to `.env`
- `php artisan key:generate`: to generate the encryption key