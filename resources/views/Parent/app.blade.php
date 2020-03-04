<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> App Name: @yield('title') </title>

        <style>

            body{
                color: #443c3cd1;
                font-weight: bold;
            }
            .sidebar{
                float: right;
                font-size: 30px;
                margin: 50px;
            }
            .sidebar p{
                font-size: 24px;
            }

            @media only screen and (max-width: 1024px){
                .sidebar{
                    float: none;
                    margin: 20px;
                }
                .container{
                    margin: 50px;
                }
            }

        </style>

    </head>
    <body>
        @section('sidebar')
            This is the master sidebar
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>