<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>

    </head>
    <body>

            @extends('welcome-layout/layout')
            @section('content')
                <div class="links">
                    <a href="/nav/home">Home</a>
                    <a href="/nav/about">About</a>
                    <a href="/nav/contact">Contact Us</a>
                    <a href="/nav/view">Form</a>
                </div>

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
            @endsection
            
    </body>
</html>
