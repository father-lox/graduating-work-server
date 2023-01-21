<!DOCTYPE html>
<html>

<head>
    <title>Comments</title>
    <link rel="stylesheet" href="./style.css">
    @vite(['resources/css/comments.css'])
    @vite(['resources/js/auto-size.js'])
    @vite(['resources/js/comments.js'])
    @vite(['resources/css/pagination.css'])
</head>

<body>
    <main class="index">
        <section class="comment-section">
            @auth("web")
                <form action="{{ route('send-comment', $newsId) }}" method="POST" class="comment-section__typing">
                    @csrf

                    <textarea id="comment-field" class="input-expressive" required maxlength="128" name="comment" type="text" name="comment" rows="1"
                        placeholder="Enter your comment"></textarea>
                    <button class="button">Comment</button>
                </form>
            @endauth
            @guest
                <h1 class="admin-page-title">List of comments</h1>
            @endguest
            <div class="comment-list">
                @foreach ($comments as $comment)                    
                    <div class="comment">
                        <p class="comment__nickname">Comment by {{$comment->user['name']}}</p>
                        <p class="comment__text">{{$comment->comment}}</p>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                {{ $comments->links() }}
            </div>
            <a href="{{ route('home') }}" class="back-to-news comment-section__back"><span class="back-to-news__lable">Back To
                    News</span><svg class="back-to-news__arrow display-more-767" width="30" height="184"
                    viewBox="0 0 30 184" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.5 181C12.5 182.381 13.6193 183.5 15 183.5C16.3807 183.5 17.5 182.381 17.5 181H12.5ZM15 0L0.566243 25H29.4338L15 0ZM17.5 181V22.5H12.5V181H17.5Z" />
                </svg>
                <svg class="back-to-news__arrow display-less-768" width="12" height="26" viewBox="0 0 12 26" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 25C5 25.5523 5.44772 26 6 26C6.55229 26 7 25.5523 7 25L5 25ZM7 25L7 5L5 5L5 25L7 25Z" />
                    <path d="M6 0L11.1962 10.5H0.803848L6 0Z" />
                </svg>
            </a>
        </section>
    </main>
</body>

</html>