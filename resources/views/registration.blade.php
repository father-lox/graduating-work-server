<!DOCTYPE html>
<html>

<head>
    <title>News Sign Up</title>
    @vite(['resources/css/signup.css'])
    @vite(['resources/css/header.css'])
</head>

<body>
    <main class="singup">
        <section class="singup__container">
            <div class="singup__actions">
                @include('components.header')
                <form class="singup__form" action="{{ route('registration-action') }}" method="post">
                    @csrf

                    <div class="default-input @error('name') default-input_error @enderror default-input_rich">
                        <input class="default-input__input" type="text" required name="name" placeholder="" />
                        <div class="default-input__icon-and-name">
                            <p class="default-input__name">Enter your full name</p>
                        </div>
                        <div class="default-input__hint-and-error">
                            <p class="default-input__hint">It is used to communication</p>
                            @error('name')
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
                                    <p class="note-error__text">{{ $message }}</p>
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="default-input @error('email') default-input_error @enderror default-input_rich">
                        <input class="default-input__input" type="email" name="email" required placeholder="" />
                        <div class="default-input__icon-and-name">
                            <p class="default-input__name">Enter your e-mail</p>
                        </div>
                        <div class="default-input__hint-and-error">
                            <p class="default-input__hint">It is used to communication</p>
                            @error('email')
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
                                    <p class="note-error__text">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="default-input @error('password') default-input_error @enderror default-input_rich">
                        <input class="default-input__input" type="password" name="password" required placeholder="" />
                        <div class="default-input__icon-and-name">
                            <p class="default-input__name">Enter password</p>
                        </div>
                        <div class="default-input__hint-and-error">
                            <p class="default-input__hint">It is used to authorize</p>
                            @error('password')
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
                                    <p class="note-error__text">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="default-input @error('password_confirmation') default-input_error @enderror default-input_rich">
                        <input class="default-input__input" type="password" name="password_confirmation" required
                            placeholder="" />
                        <div class="default-input__icon-and-name">
                            <p class="default-input__name">Confirm password</p>
                        </div>
                        <div class="default-input__hint-and-error">
                            @error('password_confirmation')
                                <div class="note-error"><svg class="note-error__image" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.81409 20.4368H19.1971C20.7791 20.4368 21.7721 18.7268 20.9861 17.3528L13.8001 4.78781C13.0091 3.40481 11.0151 3.40381 10.2231 4.78681L3.02509 17.3518C2.23909 18.7258 3.23109 20.4368 4.81409 20.4368Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0027 13.4148V10.3148" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11.995 16.5H12.005" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p class="note-error__text">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button class="button button_accent" type="submit">Sign Up</button>
                </form>
            </div>
            <picture>
                <!-- <source media="(max-width: 1024px)" srcset="./img/man-mobile.png" alt="Old Phone"> -->
                <img class="singup__illustration" src="{{ Vite::asset('resources/images/old-phone.png') }}"
                    alt="Old Phone">
            </picture>
        </section>
    </main>
    <script src="./script.js"></script>
</body>

</html>
