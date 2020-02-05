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

            <nav>

                <ul>
                    <li> <a href="/nav/home">Home</a> </li>
                    <li> <a href="/nav/about">About</a> </li>
                    <li> <a href="/nav/contact">Contact Us</a> </li>
                    <li> <a href="/nav/view">Form</a> </li>
                </ul>
            
            </nav>

            <h1>{{$title}}</h1>

            <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sint sed incidunt qui dolor ad exercitationem totam et minus sapiente minima veniam odit modi esse itaque, repellendus magni molestiae perspiciatis!
            </p>

            @if( !empty($form) )
                <form action="/nav/view" method="POST">
                    @csrf
                    <h3>Enter data below</h3>
                    <input type="text" name="data" id="data">
                    <br>
                    <button type="submit">Submit</button>
                
                </form>

                <br><br>
            @endif
            <?php 
                if( isset($data) ){
                    echo "Data entered is: $data";
                }
            ?>
    </body>
</html>
