<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Basic Meta Tags -->
        <meta name="description" content="QRFeedz - We hear you. Using QR code feedback with artificial intelligence to improve your business.">
        <meta name="keywords" content="QRFeedz, QR code, Feedback, Artificial Intelligence, Business Improvement">
        <meta name="author" content="QRFeedz">

        <!-- Facebook Open Graph -->
        <meta property="og:title" content="QRFeedz - We hear you">
        <meta property="og:description" content="Using QR code feedback with artificial intelligence to improve your business.">
        <meta property="og:image" content="{{ Vite::asset('resources/images/logo.png') }}">
        <meta property="og:url" content="https://qrfeedz.ch">
        <meta property="og:type" content="website">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="QRFeedz - We hear you">
        <meta name="twitter:description" content="Using QR code feedback with artificial intelligence to improve your business.">
        <meta name="twitter:image" content="{{ Vite::asset('resources/images/logo.png') }}">
        <meta name="twitter:site" content="@qrfeedz">
        <meta name="twitter:creator" content="@qrfeedz">

        <!-- Standard favicon -->
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicons/favicon.ico') }}">

        <!-- For iPhone and iPad -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/favicons/apple-touch-icon.png') }}">

        <!-- For Android -->
        <link rel="icon" type="image/png" sizes="192x192" href="{{ Vite::asset('resources/images/favicons/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ Vite::asset('resources/images/favicons/android-chrome-512x512.png') }}">

        <!-- For smaller resolutions -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicons/favicon-32x32.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap" rel="stylesheet">
        <style>
            body {
                background-color: #111827;
                font-family: 'Nova Mono', sans-serif;
            }

            .rounded-logo::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                box-shadow: 0 0 40px rgba(255, 255, 255, 0.09),
                            0 0 40px rgba(255, 255, 255, 0.07),
                            0 0 40px rgba(255, 255, 255, 0.05),
                            0 0 40px rgba(255, 255, 255, 0.03);
                z-index: -1;
            }
        </style>
    </head>
    <body>
        <div class="flex flex-col items-center justify-center mx-auto h-screen text-center gap-8">
            <div class="rounded-logo relative xl:h-64 xl:w-64 w-48 h-48">
                <img class="object-cover max-w-full max-h-64" src="{{ Vite::asset('resources/images/logo.png') }}">
            </div>
            <p class="text-white tracking-wider text-2xl">WE HEAR YOU.</p>
        </div>
        <footer class="absolute bottom-0 left-1/2 transform -translate-x-1/2 p-4">
            <a href="https://twitter.com/qrfeedz" class="flex items-center text-white gap-2" target="_blank" rel="noopener noreferrer">
                <span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" stroke="#FFFFFF">
                        <path d="M 11 4 C 7.1456661 4 4 7.1456661 4 11 L 4 39 C 4 42.854334 7.1456661 46 11 46 L 39 46 C 42.854334 46 46 42.854334 46 39 L 46 11 C 46 7.1456661 42.854334 4 39 4 L 11 4 z M 11 6 L 39 6 C 41.773666 6 44 8.2263339 44 11 L 44 39 C 44 41.773666 41.773666 44 39 44 L 11 44 C 8.2263339 44 6 41.773666 6 39 L 6 11 C 6 8.2263339 8.2263339 6 11 6 z M 13.085938 13 L 22.308594 26.103516 L 13 37 L 15.5 37 L 23.4375 27.707031 L 29.976562 37 L 37.914062 37 L 27.789062 22.613281 L 36 13 L 33.5 13 L 26.660156 21.009766 L 21.023438 13 L 13.085938 13 z M 16.914062 15 L 19.978516 15 L 34.085938 35 L 31.021484 35 L 16.914062 15 z"></path>
                    </svg>
                </span>
                <span>@qrfeedz</span>
            </a>
        </footer>
    </body>
</html>
