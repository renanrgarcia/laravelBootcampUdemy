# CSRF
- Laravel uses [CSRF protection](https://laravel.com/docs/csrf) to prevent cross-site request forgery attacks.
- To use CSRF:
  - `@csrf` on forms: it's short for `<input type="hidden" name="_token" value="{{ csrf_token() }}">`
  - OR: `{{ csrf_field() }}`

## CSRF on backend
- On the route:
  - ```php
      Route::get('/token', function (Request $request) {
        $token = $request->session()->token();
        return $token;
      });
  ```
- Or `return csrf_token();`

## CSRF with AJAX