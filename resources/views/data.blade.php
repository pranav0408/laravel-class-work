<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

            <h1>Data Blade File</h1>

            <form action="/view" method="POST">
                @csrf
                <h3>Enter data below</h3>
                <input type="text" name="data" id="data">
                <br>
                <button type="submit">Submit</button>
            
            </form>

            <br><br>
            <?php 
                if( isset($data) ){
                    echo "Data entered is: $data";
                }
            ?>
    </body>
</html>
