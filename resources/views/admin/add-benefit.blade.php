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

        <form action="{{ url('admin/add-benefit') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="" class="add-label">Категория</label>
                <select name="category_id" class="form-control" id="">
                    @foreach($category as $cateitem)
                        <option value="{{$cateitem->name}}">{{$cateitem->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Название</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Тип</label>
                <select name="type" class="form-control" id="">
                    <option value="Денежная">Денежная</option>
                    <option value="Натуральная">Натуральная</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Периодичность</label>
                <select name="frequency" class="form-control" id="">
                    <option value="Единовременно">Единовременно</option>
                    <option value="Ежемесечно">Ежемесячно</option>
                    <option value="Ежегодно">Ежегодно</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Расчетная сумма (методика расчета)</label>
                <textarea name="estimated_amount" class="form-control" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Уровень регулирования</label>
                <select name="level_of_regulation" class="form-control" id="">
                    <option value="Федеральный уровень">Федеральный уровень</option>
                    <option value="Региональный уровень">Региональный уровень</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Основание</label>
                <input type="text" name="footing" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Условие</label>
                <textarea name="condition" class="form-control" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="add-label">Опрос для тестирования</label>
                <select name="subject_id" class="form-control" id="">
                    @if ($subject)
                        @foreach ($subject as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>  
                        @endforeach
                    @endif
                </select>
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
