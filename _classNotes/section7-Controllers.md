# Controllers
- Syntax: `Route::verb('$uri', 'CONTROLLER', 'METHOD');`
- Located at `app/Http/Controllers`

## Editing the Controller
- Give a namespace to the controller: `namespace App\Http\Controllers;`
- Create a new class: `class MyController extends Controller {}`
- Create the first method: `public function index() { return view('welcome'); }`

## Creating Controllers with artisan
- `php artisan make:controller MyController --resource`
  - Resource: adds methods `index`, `create`, `store`, `show`, `edit`, `update`, `destroy`

## Apply middleware to controllers
- `public function __construct() { }`: used when instantiating a class
  - Used to apply middleware to the controller, for example: 
    - `public function __construct() { $this->middleware('auth'); }`
- You can also apply into the Route, for example:
  - `Route::get('/', [UserController::class, 'show'])->middleware('auth');`

## Resource Controllers
- Create the route: `Route::resource('users', UserController::class);`
  - It will create the routes `users.index`, `users.create`, `users.store`, `users.show`, `users.edit`, `users.update`, `users.destroy`
  - For example the URI: `/users/create` 
- Resources are predefined methods that can be used on the controller.

### Store method
- It's a POST request. Creates a new resource. Example: `users/create`
- Can be used to create a new resource by submitting an entity to the server. Example: forms

### Show method
- It's a GET request. Shows a resource. Example: `users/{id}`
- Can be used to show a resource with a link. Example: <a href="/categories/1">Show Category 1</a>

### Edit method
- It's a GET request. Edits a resource. Example: `users/{id}/edit`

### Update method
- It's a PUT/PATCH request. Updates a resource. Example: `users/{id}`

### Destroy method
- It's a DELETE request. Deletes a resource. Example: `users/{id}`

## @Method
- It's a method that can be used on the controller. Example: `@method('PUT')`

## Organizing Controllers
- Example:
  ```php
  Route::resources([
    'users' => UserController::class,
    'categories' => CategoryController::class
  ])
  ```

## Using specific resources
- You can specify on the route what resources can be used.
  - Example: 
    ```php
    Route::resource('users', UserController::class)->only(['index', 'show']);
    ```
- You can specify on the route what resources can not be used.
  - Example:
    ```php
    Route::resource('users', UserController::class)->except(['create', 'store']);
    ```

## API Resources
- When you use the `apiResource` method, it excludes `create` and `edit` methods.
  - Example:
    ```php
    Route::apiResource('users', UserController::class);
    ```

## Change the route resource methods names
- You can change the route methods names for the resource.
  - Example:
    ```php
    Route::Resource('users', UserController::class)->names([
      'destroy' => 'users.delete',
    ]);
    ```

## Naming resource route parameters
- You can change the route parameters names for the resource.
  - Example:
    ```php
    Route::Resource('users', UserController::class)->parameters([
      'users' => 'user_id'
    ]);
    ```

## Adjust Resource URIs
- You can change the route URI for the resource.
  - Example (On RouteServiceProvider.php):
    ```php
    Route::resourceVerbs([
      'create' => 'criar',
      'edit' => 'editar'
    ]);
    ```

## Suplement resource with another methods
- You can add new methods to the resource.
  - Example (Inside the Controller):
    ```php
    public function new_method() {
      return view('new_method');
    }