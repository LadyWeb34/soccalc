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
            <div class="header__buttons-container">
                <div  aria-labelledby="navbarDropdown">
                    <a class="link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Выход') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

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
                    <li class="benefits__category-container">
                        <div class="button-container">
                            <a href="{{url ('admin2/categories')}}" class="button">Редактировать</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right">
                <ul class="benefits__list">
                    @foreach($benefit as $item)
                        <li class="benefits__benefit-container" data-benefit="{{ $item->category_id }}">
                            <div class="benefits__benefit" id="category">{{ $item->name }}</div>
                            <div class="buttons-container">
                                <div class="button-container hover">
                                    <a href="{{url('admin2/edit-benefit/'.$item->id)}} " class="button">Редактировать</a>
                                </div>
                            </div>
                        </li>

                    @endforeach
                </ul>
            </div>

        </div>

    </section>

</main>

</body>
</html>
