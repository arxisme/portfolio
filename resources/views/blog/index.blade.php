{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
    
</body> --}}
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <img src="{{URL::asset('imgs/Intersect.png')}}" class="corner-image" alt="">
    <div class="container">
        <div class="rect1">
            <div class="link-box-mobile">
                <ul>
                    <li><a href="#">BLOGS</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>

                </ul>

            </div>
            <span>
                <div id= "time" class="time">12:00:00</div>
                <div id= "date" class="date">12th april,2023</div>
            </span>
        </div>
        <div class="blank1">
            <div>
                <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum fugiat asperiores molestias quae repellendus laborum, exercitationem molestiae error saepe, porro possimus totam. Beatae reprehenderit ipsum eaque maiores, rerum delectus labore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae qui eaque omnis fugiat aliquam voluptates impedit excepturi voluptatum placeat optio molestiae rerum id asperiores ex consequatur aperiam earum, laboriosam accusantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur magnam inventore pariatur sequi eos expedita quisquam, corrupti delectus, consequuntur ut in magni sit laboriosam, asperiores commodi. Ipsam voluptas aspernatur ab? dsjflajdf adfteoiflkdf adfg etoe gadfja f adf e f sdjf ad gf djsjf i fsjdf s f sd fa ds  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum fugiat asperiores molestias quae repellendus laborum, exercitationem molestiae error saepe, porro possimus totam. Beatae reprehenderit ipsum eaque maiores, rerum delectus labore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae qui eaque omnis fugiat aliquam voluptates impedit excepturi voluptatum placeat optio molestiae rerum id asperiores ex consequatur aperiam earum, laboriosam accusantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur magnam inventore pariatur sequi eos expedita quisquam, corrupti delectus, consequuntur ut in magni sit laboriosam, asperiores commodi. Ipsam voluptas aspernatur ab? dsjflajdf adfteoiflkdf adfg etoe gadfja f adf e f sdjf ad gf djsjf i fsjdf s f sd fa ds  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum fugiat asperiores molestias quae repellendus laborum, exercitationem molestiae error saepe, porro possimus totam. Beatae reprehenderit ipsum eaque maiores, rerum delectus labore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae qui eaque omnis fugiat aliquam voluptates impedit excepturi voluptatum placeat optio molestiae rerum id asperiores ex consequatur aperiam earum, laboriosam accusantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur magnam inventore pariatur sequi eos expedita quisquam, corrupti delectus, consequuntur ut in magni sit laboriosam, asperiores commodi. Ipsam voluptas aspernatur ab? dsjflajdf adfteoiflkdf adfg etoe gadfja f adf e f sdjf ad gf djsjf i fsjdf s f sd fa ds </h1>

            </div>
           
            {{-- <ul>
                @foreach($posts as $post)
                    <li>
                        <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul> --}}
        </div>
        <div class="rect2">
            <div class="link-box">
                <ul>
                    <li><a href="#">BLOGS</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>

                </ul>

            </div>
        </div>
        <div class="blank2">
            <div>
                <img src="{{URL::asset('imgs/ArshadAhmed.svg')}}" alt="">
            </div>
        </div> <!-- Corrected the typo here -->
    </div>
    <script src="{{URL::asset('js/script.js')}}"></script>
</body>
</html>
