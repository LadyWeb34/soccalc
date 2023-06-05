<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RitmStyle</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset("./asset/style/main.min.css")}}">
    <link rel="stylesheet" href="{{ asset("./asset/style/vendor.min.css") }}">
    <script defer src="{{ asset("./asset/js/app.js") }}"></script>

    <link rel="stylesheet" href="{{ asset( './asset/style/sb-admin-2.css' ) }}">

    <script defer src=" {{ asset( './asset/js/sb-admin-2.js') }}"></script>
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
                <a href="{{ url('/') }}" class="link">Главная</a>
            </div>
        </div>
    </div>
</header>
<div class="container container">

    <div class="descriptions">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ url('benefit-viewing/'.$benefit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="description-container">
                <div class="description bold">{{$benefit->name}}</div>
            </div>
            <div class="description-container">
                <label for="" class="lable bold">Категория</label>
                <div class="description">{{$benefit->category_id}}</div>
            </div>
            <div class="description-container">
                <label for="" class="lable bold">Тип</label>
                <div class="description">{{$benefit->type}}</div>
            </div>
            <div class="description-container">
                <label for="" class="lable bold">Периодичность</label>
                <div class="description">{{$benefit->frequency}}</div>
            </div>
            <div class="description-container">
                <label for="" class="lable bold">Расчетная сумма (методика расчета)</label>
                <div class="description">{{ $benefit->estimated_amount }}</div>
            </div>
            <div class="description-container">
                <label for="" class="lable bold">Основание</label>
                <div class="description">{{ $benefit->footing }}</div>
            </div>
            <div class="description-container">
                <label for="" class="lable bold">Условие</label>
                <div class="description">{{ $benefit->condition }}</div>
            </div>
            @if (!$benefit->subject_id)
                    
            @else
            <div class="description-container">
                    <a href="{{ route('test.show', $benefit->subject_id) }}" class="button">Пройти опрос</a>
            </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>

