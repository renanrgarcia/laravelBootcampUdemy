<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <form action="/flash" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
        <input type="text" name="username" placeholder="Enter your username">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>