<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RitmStyle</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                <a href="{{ url('admin/main') }}" class="link">Главная</a>
            </div>
        </div>
    </div>
</header>
<div class="container container">

    <div class="m-top m-bottom">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('option.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <input type="text" name="question_id" value="{{ $question->id }}" class="form-control" hidden placeholder="{{ $question->name }}">
                </div>
            <div class="mb-3">
                <label for="" class="add-label">Введите вариант ответ</label>
                <input type="text" name="option_text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Кол-во баллов при позитивном решении</label>
                <input type="number" name="points" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="button">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
