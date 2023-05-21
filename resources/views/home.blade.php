<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Primi Passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;

            }
            body {
                font-family: 'Nunito', sans-serif;
                background: rgb(18,18,18);
                background: linear-gradient(17deg, rgb(0, 0, 0) 20%, rgb(255, 0, 0) 100%);
                height: 100vh;
                color: white;
            }
            header{
                background-color: rgba(255, 255, 255, 0.678);
                height: 70px;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50%;
                margin: auto;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }
            ul {
                list-style: none;
                display: flex;
                gap: 20px;
            }
            a{
                text-decoration: none;
                text-transform: uppercase;
                color: black;
                font-weight: bold;
            }
            main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: calc(100% - 120px);
                padding: 0 450px;
                position: relative;
            }
            h1{
                color: white;
                font-size: 5rem;
                text-transform: uppercase;
            }
            p{
                padding-top: 10px;
                text-decoration: underline;
            }
            img{
                position: absolute;
                top: 200px;
                right: 500px;
                width: 20%;
            }
        </style>
    </head>

    <body class="antialiased">
        <header>
            <ul>
                @foreach ($nav_links as $link)
                    <li><a href="{{route($link)}}">{{$link}}</a></li>
                @endforeach
            </ul>
        </header>
        <main>
            <h1>{{$page_title}}</h1>
            <h3>Laravel - Primi Passi</h3>
            <p>Discover the ROUTE functionality by clicking on the links in the navigation bar to access other pages!</p>
            <img src="../img/logo-laravel-grey.png" alt="">
        </main>
    </body>
</html>
