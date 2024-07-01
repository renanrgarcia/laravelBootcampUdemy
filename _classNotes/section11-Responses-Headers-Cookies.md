# Responses - Headers - Cookies
- You can have Response headers and Request headers
- `return response('content', status)->header('key', 'value')` - Returns a response with the specified content and headers. Can be more than one header.
- Other way: `return response('content', status)->withHeaders(['key' => 'value', 'key2' => 'value2'])` - Returns a response with the specified content and headers.

## Cache Control
- `Route::middleware('cache.headers:public;max_age=86400;etag')->group(function () { Routes here. });`: Caches the response for 24 hours for all requests grouped togetherlol.

## Cookies
- `$cookie = cookie('key', 'value', 'minutes');`: Defines a cookie and returns it.
- `return response('content', status)->cookie('key', 'value')`: Returns a response with the specified content and cookies. Can be more than one cookie.
- You can unencrypt the cookies on EncryptCookies middleware: `protected $except = ['cookie1', 'cookie2'];`
  - Or you can use `return response('content', status)->withoutCookie('key');`
  - Or you can use the expire method: `return response('content', status)->expireCookie('key');`

### Extra
- Getting user information: `$user = Auth::user();` or `$user = auth()->user();`