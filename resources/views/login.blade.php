<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    @vite(['resources/css/login.css'])
    @vite(['resources/css/header.css'])
</head>

<body>
    @include('components.header')
    <main class="login">
        <form action="{{ route('login-action') }}" method="post" class="login-form">
            @csrf

            <div class="default-input default-input_rich">
                <input class="default-input__input" type="email" required name="email" placeholder="">
                <div class="default-input__icon-and-name">
                    <svg class="default-input__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9026 8.85114L13.4593 12.4642C12.6198 13.1302 11.4387 13.1302 10.5992 12.4642L6.11841 8.85114" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="#FFA2A2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>    
                    <p class="default-input__name">e-mail</p>
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
            <div class="default-input default-input_rich">
                <input class="default-input__input" type="password" name="password" required placeholder="">
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
                    <p class="default-input__name">password</p>
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
            <div class="login-form__action-and-error">
                <div class="note-error">
                    @error("login")
                        <svg class="note-error__image" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.81409 20.4368H19.1971C20.7791 20.4368 21.7721 18.7268 20.9861 17.3528L13.8001 4.78781C13.0091 3.40481 11.0151 3.40381 10.2231 4.78681L3.02509 17.3518C2.23909 18.7258 3.23109 20.4368 4.81409 20.4368Z"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.0027 13.4148V10.3148" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.995 16.5H12.005" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="note-error__text">{{$message}}</p>
                    @enderror
                </div>
                <button class="button button_accent" type="submit">login</button>
            </div>
        </form>
    </main>
    <script src="./script.js"> </script>
</body>

</html>