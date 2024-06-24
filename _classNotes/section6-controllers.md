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

### Store method
- It's a POST request
- Can be used to create a new resource by submitting an entity to the server. Example: forms

