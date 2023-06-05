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
    <script defer src="{{ asset("./src/js/app.js") }}"></script>
</head>
<body>
<header class="header">
    <div class="header__container container">
        <div class="header__inner">
            <a href="#" class="header__logo"><img src="{{ asset('./asset/img/headerlogo.svg') }}" alt=""></a>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</header>
<main class="main-content">

    <section class="first-screen">

        <div class="first-screen__container container">
            @foreach($baner as $item)
                <div class="first-screen__container container">
                    <div class="first-screen__body">

                        <img src="{{ asset('uploads/baner/'.$item->image) }}" alt="картинка" class="first-screen__img">
                        <div class="first-screen__info">
                            <div class="first-screen__subtitle">{{ $item->name }}</div>
                            <div class="first-screen__title">{{  $item->title }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
            <br><br><br>
        </div>

    </section>


    <section class="sessions">
        <div class="sessions__container container">
            <div class="sessions__title title">Сеансы RitmStyle</div>
            <div class="sessions__body">
                <div class="sessions__left-column">
                    @foreach($session as $item)
                        <div class="sessions__left-block">
                            <img src=" {{ asset('uploads/session/'.$item->image) }}" alt="img" class="sessions__img-standard">
                            <div class="sessions__text">{{ $item->name }}</div>
                        </div>
                    @endforeach

                </div>

                <div class="sessions__grid">
                    <div class="sessions__img-containergrid">
                        <img src=" {{ asset('/asset/img/session/right.png') }}" alt="img" class="sessions__img-grid">
                        <div class="sessions__text text-right">RitmStyle для пар</div>
                    </div>
                    <div class="sessions__img-containergrid">
                        <img src="{{ asset('./asset/img/session/right.png') }}" alt="img" class="sessions__img-grid">
                        <div class="sessions__text text-right">RitmStyle с полным погружением под воду</div>
                    </div>
                    <div class="sessions__img-containergrid">
                        <img src="{{ asset('./asset/img/session/right.png') }}" alt="img" class="sessions__img-grid">
                        <div class="sessions__text text-right">RitmStyle для беременных</div>
                    </div>
                    <div class="sessions__img-containergrid">
                        <img src="{{ asset('./asset/img/session/right.png') }}" alt="img" class="sessions__img-grid">
                        <div class="sessions__text text-right">RitmStyle + красочная подводная фотосессия</div>
                    </div>

                    @foreach($visit as $item)
                        <div class="sessions__img-containergrid">
                            <img src="{{ asset('uploads/visit/'.$item->image) }}" class="sessions__img-grid">
                            <div class="sessions__text text-right">{{ $item->name }}</div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about__container container">
            <div class="about__title title">Об RitmStyle</div>
            <div class="about__row-top row">
                <div class="about__info info">
                    <div class="info__title">RitmStyle массаж</div>
                    <div class="info__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in purus, sed tellus eget mattis nibh quam. Eu ornare nunc, id est. Erat consectetur etiam a sit diam in imperdiet amet. Diam nisl, ipsum suscipit amet. Eleifend amet habitasse proin quis adipiscing.
                        Nisl convallis mauris in consequat. Sit ac vitae posuere maecenas dictumst quam. Felis amet diam, non augue massa. Egestas molestie lobortis rhoncus, elit nulla nisl. Habitant tortor at tempor.
                    </div>
                </div>
                <div class="about__img-container">
                    <img src="{{ asset('./asset/img/about/Rectangle 23.png') }}" alt="img" class="about__img img-bottom">
                </div>
            </div>
            @foreach($description as $item)
                <div class="about__row-bottom row">

                    <div class="about__img-container img-containerbottom">
                        <img src="{{ asset('uploads/description/'.$item->image) }}" alt="img" class="about__img">
                    </div>
                    <div class="about__info info   text-bottom">
                        <div class="info__title">{{ $item->name }}</div>
                        <div class="info__text">
                            {{ $item->description }}
                            <br><br><br>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
    <section class="price">
        <div class="price__container container">
            <div class="price__title title">Стоимость сеансов</div>
            <div class="price__body">
                <div class="price__left">
                    <ul class="price__plist">
                        <li class="price__item">RitmStyle с погружением</li>
                        <li class="price__item">Абонемент на RitmStyle</li>
                        <li class="price__item">RitmStyle для пар</li>
                        <li class="price__item">RitmStyle для беременных</li>
                        <li class="price__item">RitmStyle +  фотосессия</li>
                    </ul>
                    <ul class="price__plist">
                        <li class="price__item">1000р.</li>
                        <li class="price__item">5500р.</li>
                        <li class="price__item">6000р.</li>
                        <li class="price__item">13500р.</li>
                        <li class="price__item">11500р.</li>
                    </ul>
                </div>

                <div class="price__right">
                    <img src="{{ asset('./asset/img/price/priceimg.png') }}" alt="img" class="price__img">
                    <div class="price__text">Подарочный сертификат</div>
                </div>

            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__text">© 2018-2022 RitmStyle</div>
    </div>
</footer>
</body>
</html>
