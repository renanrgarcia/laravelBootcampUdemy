# Sessions
- In PHP:
  ```php
  session_start();
  // set session variable
  $_SESSION['key'] = 'value';
  // get session variable
  $value = $_SESSION['key'];
  echo $value . 'variable is set';
  ```
  - The information is stored in the $_SESSION array in the server
  - The session id is stored in the cookie
- In Laravel:
  - The session data is stored as a hash inside a cookie payload
  - Set the configuration on the `config/session.php` file
    - You can change SESSION_DRIVER there or on .env file. The default is 'file' (`storage/framework/sessions`), but you can change it to 'cookie'
    - You can also change to 'database'. There is a artisan command to set a table in the database for that: `php artisan make:session-table | php artisan migrate`
    - Other options: 'memcached', 'apc', 'dynamodb', 'array' or 'redis'

## Adding and retrieving sessions
- ```php
  Route::get('/session', function (Request $request) {
    // $request->session(['key' => 'value']);
    session(['key' => 'value']);

    $value = session('key');
    return $value . 'variable is set';
  });
  ```

## Route, controller and index method to retrieve sessions
- On Routes:
  - ```php
      Route::prefix('/sessions')
      ->controller(SessionsController::class)
      ->group(function () {
        Route::get('/', 'index');
        Route::get('/set', 'set');
      });
    ```
- On Controller:
  - ```php
      public function index() {
        return session()->all();
      }

      public function set() {
        $query = request()->query();
        return "sessions are set";
      }
    ```
- You can retrieve one specific session data: `return $request->session()->get('key');` or `return $request->session()->only('key');` (return on array)
- You can set the session data by: `$request->session()->put('key', 'value');` or `$request->session()->put($query);`
- You can pass directly by pushing data: `session(['data'=>['value1', 'value2']]);`. Then you can: `session()->push('data', 'value3');`

## Delete from array in session
- On Controller:
  - ```php
      public function delete() {
        // session()->forget('key'); // delete unique session variable
        // session()->forget(['key1', 'key2']); // delete multiple session variables
        // session()->flush(); // delete all session variables
        session()->put('key', array_diff(session()->get('key'), ['value'])); // delete specific session variable inside a key array
      }
    ```
- You can transform into a collection to make it easier:
  - ```php
      session(['key' => collect(['value1', 'value2'])]); // array to collection
      $value1 = session('key')->search('value1'); // uses collection method to find the item
      session('key')->forget('$value1'); // deletes the item
    ```