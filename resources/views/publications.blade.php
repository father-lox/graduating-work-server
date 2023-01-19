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
                <li class="published-news-list__item">
                    <h2 class="published-news-list__title">Nisi, quam nisl est sed nulla sed. Ut sagittis consequat
                        ultricies odio nisi, morbi placerat.</h2>
                    <p class="published-news-list__comment">Laoreet magna morbi pulvinar ullamcorper nec felis, pretium
                        id. Potenti lacus felis tellus sit. In proin aliquam nisl mi feugiat sit. Nulla interdum in ut
                        in. Enim tellus sit tincidunt ornare erat vitae egestas. Feugiat quis in mus viverra libero
                        facilisis dignissim malesuada. Viverra at et at faucibus tempor in nibh.</p>
                    <ul class="news-statistics">
                        <li class="news-statistics__item"><svg class="news-statistics__preview-icon" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Name=Eye">
                                    <path id="pupil" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.2565 12.3876C15.2565 14.3932 13.63 16.0185 11.6244 16.0185C9.6189 16.0185 7.99356 14.3932 7.99356 12.3876C7.99356 10.381 9.6189 8.75562 11.6244 8.75562C13.63 8.75562 15.2565 10.381 15.2565 12.3876Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="eye-pit" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.6227 20.7749C15.9968 20.7749 19.9975 17.6299 22.25 12.3874C19.9975 7.145 15.9968 4 11.6227 4H11.6273C7.25324 4 3.2525 7.145 1 12.3874C3.2525 17.6299 7.25324 20.7749 11.6273 20.7749H11.6227Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg> 320</li>
                        <li class="news-statistics__item"><svg class="news-statistics__preview-icon" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Name=Chat">
                                    <path id="cloud" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.0714 19.0699C16.0152 22.1263 11.4898 22.7867 7.78642 21.074C7.23971 20.8539 6.79149 20.676 6.36537 20.676C5.17849 20.683 3.70117 21.8339 2.93336 21.067C2.16555 20.2991 3.31726 18.8206 3.31726 17.6266C3.31726 17.2004 3.14642 16.7602 2.92632 16.2124C1.21283 12.5096 1.87411 7.98269 4.93026 4.92721C8.8316 1.02443 15.17 1.02443 19.0714 4.9262C22.9797 8.83501 22.9727 15.1681 19.0714 19.0699Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="dot-3" d="M15.9394 12.413H15.9484" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path id="dot-2" d="M11.9304 12.413H11.9394" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path id="dot-1" d="M7.9214 12.413H7.9304" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg> 240</li>
                    </ul>
                </li>
            </ul>
        </section>
    </main>
    <script src="./script.js"> </script>
</body>

</html>