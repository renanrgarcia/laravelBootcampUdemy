# Requests Inputs - Flash
- Flash data can be later accessed in the view.
- You can find these files at `storage/framework/sessions` by default.
- You can change in .env on `SESSION_DRIVER`  from "file" to "cookie". That way you can store the data in your browser.

## Method
- `$request->flash()`: Returns an array of all the flash data in the request.
- `$request->flashOnly('name', 'email')`: Returns an array of only the specified flash data in the request.
- `$request->flashExcept('name', 'email')`: Returns an array of all flash data except the specified flash data in the request.

## Redirect
- `redirect()->back()`: Redirects back to the previous page.
- `redirect('/')->withInput()`: Redirects to the '/' route with the input data.
- `back()->withInput()`: Redirects back to the previous page with the input data.
- `$request->cookie('name')`: Returns the value of the cookie with the name `name`. 
- `$request->route('home')->withInput()`: Redirects to the 'home' route with the input data.

### Retrieve the data on form
- `<input ... value="{{ old('name') }}">`: Returns the value of the input with the name `name` from the request.
- On the route: `$request->old('name')`