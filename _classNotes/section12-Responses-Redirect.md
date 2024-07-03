# Responses - Redirect
- `back()` - Redirects to the previous page
- `redirect($path)` - Redirects to a given path
- `redirect()->route('name')` - Redirects to the route with the given name

## Redirect with parameters
- `redirect()->route('name', ['parameter' => 'value'])` - Redirects to the route with the given name
  - Redirected to `return $request->query('parameter')` 

## Redirect without parameters
- `redirect()->route('name')` - Redirects to the route with the given name

## Redirecting controller actions (methods)
- `redirect()->action([MyController::class, 'method'], ['parameter' => 'value'])` - Redirects to the controller method

## Redirecting to external domains
- `redirect()->away('https://example.com')` - Redirects to an external domain

## Redirecting with flashed data
- `redirect()->with('key', 'value')` - Redirects with the given key and value

## Redirecting and consuming JSON data
- `redirect()->json(['key' => 'value'])` - Redirects and consumes JSON data

## Extra
- @vite(['resources/js/app.js']) - Includes the JS file  in the HTML, so you can use JavaScript