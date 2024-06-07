<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landed</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <img src="{{URL::asset('imgs/Intersect.png')}}" class="corner-image" alt="">
    <div class="container">
        <div class="rect1">
            <div class="link-box-mobile">
                <ul>
                    <li><a href="{{ route('blog.index')}}">BLOGS</a></li>
                    <li><a href="{{ route('home')}}">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>

                </ul>

            </div>
            <span>
                <div id= "time" class="time">12:00:00</div>
                <div id= "date" class="date">12th april,2023</div>
            </span>
        </div>
        <div class="blank1">
           
        </div>
        <div class="rect2">
            <div class="link-box">
                <ul>
                    <li><a href="{{ route('blog.index')}}">BLOGS</a></li>
                    <li><a href="{{ route('home')}}">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>

                </ul>

            </div>
        </div>
        <div class="blank2"></div> <!-- Corrected the typo here -->
    </div>
    <script src="{{URL::asset('js/script.js')}}"></script>
</body>
</html>
