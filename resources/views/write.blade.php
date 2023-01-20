<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
    @vite(['resources/css/signup.css'])
    @vite(['resources/css/header.css'])
</head>
<body>
        <form action="{{ route('send-post') }}" method="post" class="login-form">
            @csrf

            <div class="default-input">
                <input class="default-input__input" type="text" required name="title" placeholder="">
                <div class="default-input__icon-and-name"><svg class="default-input__icon" viewBox="0 0 18 18"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.9887 11.5096C6.08798 11.5096 3.61084 11.9482 3.61084 13.7046C3.61084 15.4611 6.07227 15.9154 8.9887 15.9154C11.8894 15.9154 14.3658 15.4761 14.3658 13.7204C14.3658 11.9646 11.9051 11.5096 8.9887 11.5096Z"
                            stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.98867 9.00443C10.8922 9.00443 12.4351 7.46086 12.4351 5.55728C12.4351 3.65371 10.8922 2.11086 8.98867 2.11086C7.0851 2.11086 5.54152 3.65371 5.54152 5.55728C5.5351 7.45443 7.06795 8.998 8.96438 9.00443H8.98867Z"
                            stroke="#FFA2A2" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="default-input__name">title</p>
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
            <div class="default-input">
                <input class="default-input__input" type="text" name="author_comment" placeholder="">
                <div class="default-input__icon-and-name"><svg class="default-input__icon" viewBox="0 0 18 18"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.3173 7.08585V5.4756C12.3173 3.59085 10.7888 2.06235 8.90406 2.06235C7.01931 2.0541 5.48481 3.5751 5.47656 5.4606V5.4756V7.08585"
                            stroke="#FFA2A2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.7623 15.9372H6.0315C4.461 15.9372 3.1875 14.6644 3.1875 13.0932V9.87645C3.1875 8.3052 4.461 7.03245 6.0315 7.03245H11.7623C13.3328 7.03245 14.6063 8.3052 14.6063 9.87645V13.0932C14.6063 14.6644 13.3328 15.9372 11.7623 15.9372Z"
                            stroke="#FFA2A2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.89697 10.652V12.3178" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="default-input__name">your comment</p>
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