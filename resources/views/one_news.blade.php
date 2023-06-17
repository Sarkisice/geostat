<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/one_news.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo2.png')}}" type="image/x-icon">    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Новости</title>
</head>
<body>

@include('blocks/header')

<div class="news-container" style="min-height: 1000px">
    <div class="news-container-pic">
        <div class="news-head">
            <h1>{{$news['name']}}</h1>
        </div>
    </div>
    <div class="news-container-about">
        <div class="news">
            <div class="news-content">
                <div class="news-left">
                    <img src="{{asset($news['img'])}}" style="border-radius: 25px; width: 100%; height: 100%">
                </div>
                <div class="news-right">
                    <p style="width: 100%; height: 100%">{{$news['title']}}</p>
                </div>
            </div>
            <span class="news-inner_date">{{$news['date']}}</span>
        </div>
        <div class="news-description">
            <p>{{$news['des'].$news['des']}}</p>
        </div>
    </div>
    <div style="display: flex; width: 100%; justify-content: center; height: 50px; margin-bottom: 20px">
        <a href="{{url('/news')}}"><button class="btn-all-news" style="justify-content: center">Все новости</button></a>
    </div>
    <div class="feature">
        @include('blocks/news-container')
    </div>
</div>

@include('blocks/footer')

<script type="text/javascript" src="{{url('js/jquery-3.7.0.min.js')}}"></script>

<script>
    $(document).ready ( function(){
        let feed = $('.column');
        let i;
        for (i = 3; i < feed.length; i++) {
            feed[i].style.display = "none";
        }
    });
</script>

</body>
</html>

