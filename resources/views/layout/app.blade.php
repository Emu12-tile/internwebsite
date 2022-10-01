<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <style>
        img {
            -o-object-fit: cover
        }
    </style>
    {{-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> --}}
    <!-- Styles -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://apis.google.com/js/platform.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> --}}
</head>

<body class="text-gray-800 dark:text-gray-200 ">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        {{-- <x-layout.navbar></x-layout.navbar> --}}
        {{ $slot }}
        {{-- <x-layout.footer></x-layout.footer> --}}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 'auto',
            spaceBetween: 30,
            // slidesPerGroup: 'auto',
            loop: true,
            // centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            // loopFillGroupWithBlank: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,

            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,

                },
                520: {
                    slidesPerView: 2,

                },
                950: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>
