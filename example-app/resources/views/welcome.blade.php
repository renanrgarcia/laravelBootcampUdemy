<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/posts/1" method="post">
        @csrf
        @method('PATCH')
        <button type="submit">Update</button>
    </form>
</body>
</html>