<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <title>CSRF</title>
    </head>
    <body >
        <form action="/posts" method="post">
            <input type="hidden" value="">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function() {
                console.log('works!')
            })
        </script>
    </body>
</html>
