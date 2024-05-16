# CSRF
- Laravel uses [CSRF protection](https://laravel.com/docs/csrf) to prevent cross-site request forgery attacks.
- To use CSRF:
  - `@csrf` on forms: it's short for `<input type="hidden" name="_token" value="{{ csrf_token() }}">`
  - OR: `{{ csrf_field() }}`

## CSRF on backend
- On the route:
  - ```php
      $token = $request->session()->token();
      return $token;
      ```
  - Or `return csrf_token();`