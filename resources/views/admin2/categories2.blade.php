<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RitmStyle</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="{{ asset("./asset/js/app.js") }}"></script>

    <link rel="stylesheet" href="{{ asset( './asset/style/sb-admin-2.css' ) }}">

    <script defer src=" {{ asset( './asset/js/sb-admin-2.js') }}"></script>

    <link rel="stylesheet" href="{{asset("./asset/style/main.min.css")}}">
    <link rel="stylesheet" href="{{ asset("./asset/style/vendor.min.css") }}">
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

<main class="wrapper m-top">
    <div class="container container">
        <div class="container__container">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Категория</th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                @foreach($category as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td class="green center">
                            <a href=" {{url('admin2/edit-category/'.$item->id)}} " class="btn btn-succes green ">Изменить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</main>

</body>
</html>
