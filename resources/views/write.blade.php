<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
    @vite(['resources/css/header.css'])
    @vite(['resources/css/signup.css'])
    @vite(['resources/css/write.css'])
    @vite(['resources/js/auto-size.js'])
    @vite(['resources/js/comments.js'])
</head>
<body class="write">
    @include('components.header')
        <form action="{{ route('send-post') }}" method="post" class="create-post">
            @csrf

            <textarea id="comment-field" class="input-expressive" required name="title" maxlength="78" rows="1"
                        placeholder="Enter your comment (78)"></textarea>
            <div class="default-input">
                <textarea class="default-input__input" maxlength="128" type="text" name="author_comment" placeholder=""></textarea>
                <div class="default-input__icon-and-name">
                    <svg class="default-input__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7473 20.4429H20.9999" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="#FFA2A2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.0208 6.00092L16.473 10.188" stroke="#FFA2A2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                    <p class="default-input__name">your comment (128)</p>
                </div>
                <div class="default-input__hint-and-error">
                    <div class="note-error"><svg class="note-error__image" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.81409 20.4368H19.1971C20.7791 20.4368 21.7721 18.7268 20.9861 17.3528L13.8001 4.78781C13.0091 3.40481 11.0151 3.40381 10.2231 4.78681L3.02509 17.3518C2.23909 18.7258 3.23109 20.4368 4.81409 20.4368Z"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.0027 13.4148V10.3148" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.995 16.5H12.005" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="note-error__text">This field is requered</p>
                    </div>
                </div>
            </div>
            <button class="button">post</button>
        </form>
</body>
</html>