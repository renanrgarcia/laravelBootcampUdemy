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