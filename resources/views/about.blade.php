<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Students page</title>

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
                background: linear-gradient(17deg, rgba(18,18,18,1) 20%, rgba(255,214,0,1) 100%);
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
            .navbar {
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
                border: 2px solid black;
                padding-left: 20px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 25px;
            }
            h2{
                padding-top:40px;
                margin-bottom: 30px;
            }
            h3{
                padding-top: 20px;
                padding-left: 20px;
            }
            p{
                padding-top: 10px;
                text-decoration: underline;
                padding-left: 20px;
            }
            .students{
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                max-height: 430px;
                border: 5px solid white;
                padding: 20px 50px;
                border-radius: 10px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 25px;
            }
            .students li{
                text-transform: capitalize;
            }
            img{
                position: absolute;
                top: 200px;
                right: 500px;
                width: 20%;
                padding: 10px;
                border-radius: 10px;
                filter:grayscale();
                border-radius: 50%;
                border: 2px solid white;
                box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            }
            .circle{
                position: absolute;
                top: 180px;
                right: 520px;
                width: 120px;
                height: 120px;
                background-color: rgb(27, 27, 27);
                border-radius:50%;
                border: 1px solid white;
                box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            }
        </style>
    </head>

    <body class="antialiased">
        <header>
            <ul class="navbar">
                @foreach ($nav_links as $link)
                    <li><a href="{{route($link)}}">{{$link}}</a></li>
                @endforeach
            </ul>
        </header>
        <main>
            <h1>{{$page_title}}</h1>
            <h3>{{$description}}</h3>
            <p>I attend the Boolean course and I'm a student of class 92</p>
            <img src="../img/profile-picture.png" alt="">
            <div class="circle"></div>
        </main>
    </body>
</html>
