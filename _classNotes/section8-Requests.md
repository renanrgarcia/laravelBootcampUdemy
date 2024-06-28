# Requests
- Class: `Illuminate\Http\Request`
  - Then, instantiate it: `Request $request` on the route or controller.
- You can see what is available on the `Request` class:
  ```php
  Route::get('/', function (Request $request) {
    dd($request);
  })
  ```
- It's used with dependency injection on the controller and route.

## Useful methods on the `Request` class
- `is`: `$request->is('posts/path')`: `true` if the request is the route path `posts/path`.
- `routeIs`: `$request->routeIs('posts.path')`: `true` if the request is the route name `posts.path`.
- `host`: `$request->host()`: returns the host name.
- `getHttpHost`: `$request->getHttpHost()`: returns the host name with port.
- `getSchemeAndHttpHost`: `$request->getSchemeAndHttpHost()`: returns the scheme and host name. Example: `http://localhost:8000`.
- `method`: `$request->method()`: returns the request method. 
- `ip`: `$request->ip()`: returns the IP address of the request.
- `ips`: `$request->ips()`: returns an array of IP addresses of the request.