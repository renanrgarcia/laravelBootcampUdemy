# Requests Inputs - Flash
- Flash data can be later accessed in the view.
- You can find these files at `storage/framework/sessions` by default.
- You can change in .env on `SESSION_DRIVER`  from "file" to "cookie". That way you can store the data in your browser.

## Method
- `$request->flash()`: Returns an array of all the flash data in the request.
- `$request->flashOnly('name', 'email')`: Returns an array of only the specified flash data in the request.