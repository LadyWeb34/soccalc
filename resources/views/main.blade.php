<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Социальный калькулятор ГКУ СО «Фроловский ЦСОН»</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset("./asset/style/main.min.css")}}">
    <link rel="stylesheet" href="{{ asset("./asset/style/vendor.min.css") }}">
    <script defer src="{{ asset("./asset/js/app.js") }}"></script>
</head>
<body>
<header class="header">

    <div class="header__container container">
        <div class="header__body">
            <img src="{{ asset('./asset/img/logo.png') }}" alt="header-logo" class="header__logo">
            <div class="header__text-container">
                <h1 class="header__title">ГКУ СО «ФРОЛОВСКИЙ ЦСОН»</h1>
                <h2 class="header__subtitle">Социальный калькулятор</h2>
            </div>
            <div></div>
        </div>
    </div>
</header>
{{--@if (Route::has('login'))--}}
{{--    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}

<main class="wrapper m-top">
    <section class="calc">
        <div class="calc__container container">
            <div class="calc__body">

                <ul class="categories__list">
                    <li class="benefits__category-container" data-filter="all">
                        <div class="benefits__category" id="category">Все</div>
                    </li>
                    @foreach($category as $item)
                        <li class="benefits__category-container" data-filter="{{ $item->name }}">
                            <div class="benefits__category" id="category">{{ $item->name }}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="right">
                <ul class="benefits__list">
                    @foreach($benefit as $item)
                        <li class="benefits__benefit-container" data-benefit="{{ $item->category_id }}">
                            <a href=" {{url('benefit/'.$item->id)}}" class="benefits__benefit benefit-hover">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>

</main>

</body>
</html>
