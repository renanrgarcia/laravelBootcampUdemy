<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- {{$username}} -->
    @if($count == 20)
        <h2>Count is 20</h2>
    @else
        <h2>Count is not 20</h2>
    @endif

    @unless($status == 'inactive')
        <h2>Status is active</h2>
    @endunless
</body>
</html>