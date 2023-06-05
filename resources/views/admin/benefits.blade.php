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
                <a href="{{ url('admin/main') }}" class="button">Главная</a>
            </div>
        </div>
    </div>
</header>

<main class="wrapper">
    <div class="container container">
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Категория</th>
                    <th>Название</th>
                    <th>Тип</th>
                    <th>Переодичность</th>
                    <th>Расчетная сумма (методика расчета)</th>
                    <th>Уровень регулирования</th>
                    <th>Основание</th>
                    <th>Условие</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                    <th>Подкатегории</th>
                </tr>
                </thead>
                <tbody>
                @foreach($benefit as $item)
                    <tr>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->frequency }}</td>
                        <td>{{ $item->estimated_amount }}</td>
                        <td>{{ $item->level_of_regulation }}</td>
                        <td>{{ $item->footing }}</td>
                        <td>{{ $item->condition }}</td>
                        <td>
                            <a href=" {{url('admin/edit-benefit/'.$item->id)}} " class="btn btn-succes">Изменить</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/delete-benefit/'.$item->id) }}" class="btn btn-succes">Удалить</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/benefit/'.$item->id) }}" class="btn btn-succes">Подкатегории</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="button-container">
            <a href="{{ url('admin/add-benefit') }}" class="button">Добавить</a>
        </div>
    </div>
</main>

</body>
</html>
