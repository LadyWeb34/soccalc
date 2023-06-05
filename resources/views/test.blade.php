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
    <script defer src="{{ asset("/asset/js/test.js") }}"></script>
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
        @if ($subject)
        <form>
            @csrf
            @foreach($subject as $category)
                <div class="card mb-3">
                    <div class="card-header">{{ $category->name }}</div>
    
                    <div class="card-body">
                        @foreach($category->categoryQuestions as $question)
                            <div class="card @if(!$loop->last)mb-3 @endif">
                                <div class="card-header">{{ $question->question_text }}</div>
            
                                <div class="card-body">
                                    <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                    @foreach($question->questionOptions as $option)
                                        <div class="form-check">
                                            <input data-points="{{ $option->points }}" class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}"@if(old("questions.$question->id") == $option->id) checked @endif>
                                            <label class="form-check-label">
                                                {{ $option->option_text }}
                                            </label>
                                        </div>
                                    @endforeach

                                    @if($errors->has("questions.$question->id"))
                                        <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                            <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="alert alert-danger" id="false_position" style="display: none">
                        <h3>{{ $category->false_position }}</h3>
                    </div>
                    <div class="alert alert-success" id="true_position" style="display: none">
                        <h3>{{ $category->true_position }}</h3>
                    </div>
                </div>
            @endforeach

            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <button id="btn-test" type="button" class="button">
                        Ответить
                    </button>
                </div>
            </div>
        </form>
        @endif
    </div>
</div>
</body>
</html>

