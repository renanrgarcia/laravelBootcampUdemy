# Requests
- Class: `Illuminate\Http\Request`
  - Then, instantiate it: `Request $request` on the route or controller.
- You can see what is available on the `Request` class:
  ```php
  Route::get('/', function (Request $request) {
    dd($request);
  })