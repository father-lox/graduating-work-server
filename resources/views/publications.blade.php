<!DOCTYPE html>
<html>

<head>
    <title>Your News</title>
    @vite(['resources/css/publications.css'])
    @vite(['resources/css/header.css'])
</head>

<body>
    @include('components.header')
    <main class="author-news">
        <section class="published-news">
            <h1 class="admin-page-title">List your news</h1>
            <ul class="published-news-list">
                @foreach($posts as $post)
                <li class="published-news-list__item">
                    <h2 class="published-news-list__title">{{$post->title}}</h2>
                    <p class="published-news-list__comment">{{$post['author_comment']}}</p>
                </li>
                @endforeach
            </ul>
        </section>
    </main>
    <script src="./script.js"> </script>
</body>

</html>