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
                background: linear-gradient(17deg, rgba(18,18,18,1) 20%, rgba(0,255,98,1) 100%);
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
            }
            h2{
                padding-top:40px;
                margin-bottom: 30px;
            }
            p{
                padding-top: 10px;
                text-decoration: underline;
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
                width: 10%;
                padding: 10px;
                border-radius: 10px;
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
            <h3>{{$class_number}}</h3>
            <h2>All Students:</h2>
            <ul class="students">
                @foreach ($students as $student )
                    <li>{{$student}}</li>
                @endforeach
            </ul>
            <img src="../img/student-icon.png" alt="">
        </main>
    </body>
</html>
