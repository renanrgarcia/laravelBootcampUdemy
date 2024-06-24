<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    CATEGORIES

    <h2>Categories Store Method</h2>

    <form action="/categories" method="post">
        @csrf
        <button type="submit">Submit</button>
    </form>

    <hr>

    <h2>Categories Show Method</h2>

    <a href="/categories/1">Show Category</a>
</body> 
</html>