<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Asosiy menu:  <span class="text-info"> {{ session('lang') }} </span>  == <span>{{ app()->getLocale()  }}</span></h3>
        <br>
        <br>
        <div class="row">
            <ul class="nav nav-pills">
                <a class="nav-link" href="/lang/uz">Uzb</a>
                <a class="nav-link" href="/lang/ru">Rus</a>
                <a class="nav-link" href="/lang/en">Eng</a>
            </ul>
        </div>
        <button class="btn btn-secondary">@lang('words.salom')</button>
        <br>
        <br>

        <div class="row">
            <div class="card-body">
                <form method="GET" action="{{ route('login')}}">
                    @csrf
                    <button class="btn btn-outline-info">@lang('words.login')</button>
                </form>
                <form method="GET" action="{{ route('register')}}">
                    @csrf
                    <button class="btn btn-outline-warning">@lang('words.register')</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <div>
                    @foreach($langs as $lang)
                    <h3>{{ $lang["title_".app()->getLocale()] }}</h3>
                    <p>{{ $lang["description_".app()->getLocale()] }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>

{{--Ingliz gazetalarining birida XXI Asrning Taniqli Futbol murabbiylaridan biri, Axir qanday qilib biz bir vaqting o'zida 2 ta jamoani yutishimiz mumkin, bu aqlga sig'maydi degan, Hazilomus maqola bosib chiqariladi.Savol. Menga Murabbiy Ismini emas, Murabbiy 1 kun oldin yuta olmagan jamoani nomini yozib bering.--}}
