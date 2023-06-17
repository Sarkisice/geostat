<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/case.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo2.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Кейсы лаборатории</title>
</head>
<body>

@include('blocks/header')

<div class="case-container">
    <div class="case-container-pic" style="background: url({{asset($case->img)}}); background-size: cover;">
        <p>{{$case->name}}</p>
    </div>
    <div class="case-content">
        <div style="display: flex; justify-content: space-between; width: 100%">
            <div class="column">
                <p style="font-size: 25px; font-weight: bolder">Проблемы:</p>
                <p style="font-size: 20px">{{$case->problem}}</p>
            </div>
            <div class="column">
                <p style="font-size: 25px; font-weight: bolder">Цели:</p>
                <p style="font-size: 20px">{{$case->target}}</p>
            </div>
            <div class="column">
                <p style="font-size: 25px; font-weight: bolder">Результат:</p>
                <p style="font-size: 20px">{{$case->result}}</p>
            </div>
        </div>
        <div class="main-content">
            <p style="font-size: 30px; font-weight: bolder">Описание</p>
            @foreach($des as $d)
                {!! $d->content !!}
            @endforeach
        </div>
    </div>
</div>
