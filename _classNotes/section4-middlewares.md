# Middlewares
- `php artisan make:middleware middlewareName`:
  - To create a new middleware on `app/Http/Middleware` folder
- Example:
  - ```php
      Route::get('/', function () {
        return view('welcome');
      })->middleware(MiddlewareName::class);
    ```

## Difference on Laravel 11:
- The middlewares are builtin on Laravel 11, you can see them called at `bootstrap/app.php`
  - To see their archives, go to `vendor/laravel/framework/src/FolderName/Middleware` folder

## Middleware alias
- On `app/Http/Kernel.php`, you can see the aliases on `middlewareAliases` property
- You can add one to your own middleware

## Global register
- On `app/Http/Kernel.php`, you can see the global middleware on `$middlewareGroups` property
  - You can add other global middleware to your `middlewareGroups`, it will affect all the specified routes