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

    <hr>

    <h2>Categories Edit Method</h2>

    <a href="/categories/1/edit">Show Category</a>

    <hr>

    <h2>Categories Update Method with Put or Patch</h2>

    <form action="/categories/1" method="post">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <button type="submit">Put or Patch Update</button>
    </form>]
    
    <hr>

    <h2>Categories Delete Method</h2>

    <form action="/categories/1" method="post">
        @csrf
        @method('delete')
        <!-- <input type="hidden" name="_method" value="delete"> -->
        <button type="submit">Delte Method</button>
    </form>

    <hr>

    <a href="/photos">PHOTOS</a>

</body> 
</html>