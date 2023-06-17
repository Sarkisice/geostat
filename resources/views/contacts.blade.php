<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/contacts.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo2.png')}}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Контакты</title>
</head>

<body>

@include('blocks/header')

<div class="sc-content">
    <div class="container-content">
        <div class="left-content" style="color: white">
            <div class="my-container">
                <div style="padding-top: 150px;padding-bottom: 70px; justify-content: left; color: white">
                    <span class="sc-hdr h1">Контакты</span>
                </div>
                <div class="scc-itm">
                    <span class="scc-i-hdr" style="font-size: 24px; font-weight: 500; color: #c5c5c5">
                        <i>Наш адрес:</i>
                    </span>
                    <hr style="width: 100% ; color: white">
                    <span class="scc-descr">г. Москва, ул. Лиственничная аллея д. 4А </span>
                    <hr style="width: 100% ; color: white">
                    <span class="scc-i-hdr" style="font-size: 24px; font-weight: 500; color: #c5c5c5">
                        <i>Доступность:</i>
                    </span>
                    <hr style="width: 100% ; color: white">
                    <div class="scc-i-two">
                        <span class="scc-descr with-icn"><span style="color: #92c762; font-size: 20px">&#8226;</span> м. Петровско-Разумовского </span>
                        <span class="scc-descr with-icn man"><i class='bx bx-run'></i> 10-12 мин</span>
                        <hr style="width: 100% ; color: white">
                        <span class="scc-i-hdr" style="font-size: 24px; font-weight: 500; color: #c5c5c5">
                            <i>График работы:</i>
                        </span>
                        <hr style="width: 100% ; color: white">
                        <span class="scc-descr full-width">ПН-ПТ с 9.00 до 17.00, ул. Лиственничная аллея д. 4А</span>
                        <hr style="width: 100% ; color: white">
                    </div>
                </div>
            </div>
        </div>
        <div class="right-content" style="width: 68%; display: flex; flex-direction: column; padding-top: 153px">
            <div style="display: flex; justify-content: space-between; margin-bottom: 15px">
                <div class="scc-i-hdr">
                    <p style="font-size: 20px; font-weight: 400; color: #c5c5c5">+7 999 999 99 99</p>
                    <i class="scc-descr">Контактный номер</i>
                </div>
                <div class="scc-i-hdr">
                    <p style="font-size: 20px; font-weight: 400; color: #c5c5c5">info@geostat.ru</p>
                    <i class="scc-descr">Почта для обращений</i>
                </div>
                <div class="scc-i-hdr">
                    <ul class="social-icons" style="margin-top: 10px; margin-bottom: -3px">
                        <li><a class="social-icon-whatsapp" href="#" title="..." target="_blank" rel="noopener"><img src="/img/etc/wh.png"; style="height: 25px; width: 25px"></a></li>
                        <li><a class="social-icon-telegram" href="#" title="..." target="_blank" rel="noopener"><img src="/img/etc/tel.png"; style="height: 25px; width: 25px"></a></li>
                    </ul>
                    <i class="scc-descr">Социальные сети</i>
                </div>
            </div>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A21ee91bb04e89ca9d867842de56f986d98870b9474a11cb921a06685eedc9a67&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
    <div class="my-container">
        <div style="display: flex; width: 100%; justify-content: left; color: white">
            <span class="sc-hdr h1">Сотрудники центра</span>
        </div>
    </div>
    <div class="staff-container">
        <div class="staff">
            @foreach($staff as $s)
                <div class="staff-content">
                        <div class="staff-left">
                            <img src="{{asset($s->img)}}" style="border-radius: 25px; width: 100%; height: 100%">
                        </div>
                        <div class="staff-right">
                            <p class="text-staff">{{$s->name}}</p>
                            <p class="text-staff">{{$s->des}}</p>
                            <p class="text-staff">{{$s->number}}</p>
                            <p class="text-staff">{{$s->mail}}</p>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('blocks/ffooter')

</body>

</html>


