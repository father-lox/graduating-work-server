<!DOCTYPE html>
<html>

<head>
    <title>News</title>
    @vite(['resources/css/index.css'])
    @vite(['resources/css/header.css'])
</head>

<body>
    @include('components.header')
    <main class="index">
        <section class="news-section">
            @foreach ($posts as $post)                
            <div class="news">
                <h1 class="news__title">{{$post->title}}</h1>
                <div class="news__author-comment-section">
                    @if(strlen($post['author_comment']) > 0)                        
                        <div class="comment">
                            <p class="comment__nickname comment__nickname_writer">
                                Comment by {{$post->user['name']}}
                            </p>
                            <p class="comment__text comment__text_writer">
                                {{$post['author_comment']}}
                            </p>
                        </div>
                    @endif
                </div>
                <div class="news__controllers">
                    <button class="button">Комментировать</button>
                </div>
            </div>
            @endforeach
        </section>
    </main>
    <script src="./script.js"> </script>
</body>

</html>