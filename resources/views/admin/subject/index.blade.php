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
        <div class="action-content" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <div class="block" style="display: flex; gap: 20px;">
                <a href="{{ route('subject.index') }}" class="button">Список тематик</a>
                <a href="{{ route('question.index') }}" class="button">Список вопросов</a>
                <a href="{{ route('option.index') }}" class="button">Список ответов</a>
            </div>
            <a href="{{ route('subject.create') }}" class="btn btn-success">Новая тема</a>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Код</th>
                <th>Название тематики</th>
                <th>Добавить вопрос</th>
                <th>Изменить</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
                @if($subject)
                    @foreach($subject as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('question.show', $item->id) }}" class="btn btn-primary">Добавить вопрос</a>
                            </td>
                            <td>
                                <a href="{{ route('subject.edit', $item->id) }}" class="btn btn-warning">Изменить</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('subject.destroy', $item->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
