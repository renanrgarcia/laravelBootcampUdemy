# Routes
- Base app routes:
  - `routes/web.php`
- `app/Providers/RouteServiceProvider.php`: 
  - This is the file in charge of the app routes
  - It contains middlewares, that are applied before the requests to the routes
- ```php
  Route::method('$uri', callbackFunction () {
    return view('viewName');
  });
  ```
- Methods:
  - `get()`: used to retrieve a resource
  - `post()`: used to create a resource, submitting an entity to the server
  - `put()`: used to fully update a resource
  - `patch()`: used to parcially update a resource
  - `delete()`: used to delete a resource
  - `options()`: used to describe the communication options of the server
- The view return is in the `resources/views` folder
- A different way to create a route is:
  - ```Route::verb('$uri', 'CONTROLLER', 'METHOD');```
- php artisan route:list: lists all routes

## Dependency Injection
- You can use a class on the route function to inject dependencies
  - Ex:
  ```php
  Route::get('/user', function (Request $request) {
    return $request->user();
  });
  ```

## Routes functions
- return redirect('routeName'): global function
- Route::redirect('baseRouteName', 'routeName'): Route method
- return view('viewName'): global function
- Route::view('routeName', 'viewName'): Route method

## Route parameters
- ```php
  Route::get('/user/{id}', function ($id) {
    return $id;
  });
  ```

### Optional parameters
- ```php
  Route::get('/user/{id?}', function ($id = 1) {
    return $id;
  });
  ```
- ```php
  Route::get('/user/{id?}', function ($id = null) {
    return $id;
  });
  ```

## Regular Expressions
- Example:
  ```php
  Route::get('/user/{id}', function ($id) {
    return $id;
  })->where('id', 'regularExpression');
  ```
- Laravel facilitates:
  - ->whereAlpha(): Only letters
  - ->whereNumber(): Only numbers
  - ->whereAlphaNumeric(): Only letters and numbers
  - ->whereIn('list', ['item1', 'item2']): Only in a list
  - ->whereDate(): Only dates

## Named routes
- Example:
  ```php
  Route::get('/user/{id}', function ($id) {
    return $id;
  })->name('user');
  ```
