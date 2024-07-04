# Views
- Creating a view: `php artisan make:view viewName`
- Route: `Route::view('$uri', 'viewName');` or `Route::get('$uri', function () { return view('viewName'); });`

## Nested Views
- Create nested views: `php artisan make:view viewName/nestedViewName`
- Route: `Route::view('/viewName', 'viewName.nestedViewName');`

## Passing data to views
- You can instantiate a class and pass data into the view.
- Instancy a class: `$user = new User('renan', 'renan@email.com);`
- On route: `return view('viewName', ['user' => $user]);` or `return view('viewName', compact('user'));` (Compact )
- On view: `{{ $user->name }}`
- Use with fucntion to pass data to view: `Route::view(...)->with('key', 'value');`

## Sharing data
- On AppServiceProvider.php, boot function: `View::share(compact('value') | 'value' => $value);`
  - For example `$user` instanced.

## Service Providers
- These are used through all aplication
- To create a service provider: `php artisan make:provider MyServiceProvider`
- You have to register it in `config/app.php` to work
- Now you can have your data shared in a specific Service Provider, not in AppServiceProvider.php 

## View Composer
- `View::composer('viewName', 'viewName2'], function ($view) { $view->with('user', new User('renan', 'renan@email.com')); });` or
  `view()->composer(['viewName', 'viewName2'], function ($view) { $view->with('user', new User('renan', 'renan@email.com')); });`
- Use composer is better to better organize your data.

## ComposerServiceProvider
- You can centralize your data in a composer service provider.
- Create app/View/Composers/UserViewComposer.php and add:
  ```php
  namespace App\View\Composers;

  use Illuminate\View\View;

  class User {...}

  class UserViewComposer {
    public function compose(View $view) {
      $view->with('user', new User('Renan Garcia', 'r@r.com'));
    }
  }
  ```
- Then, call it by adding it to the Provider Boot function: `view()->composer(['profile', 'dashboard'], UserViewComposer::class);`

## Optimize Views
- Laravel compile the views on storage/framework/views and store it on memory
- You can pre-compile the views with `php artisan view:cache`
- You can test the time by `{{microtime(true) - LARAVEL_START}}` on some view
