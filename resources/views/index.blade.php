<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo2.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Лаборатория ГИС и ДЗЗ</title>
</head>
<body>

@include('blocks/header')

<div class="index-pic">
    <div class="index-pic-start">
        <div style="width: auto; text-align: center; vertical-align: center; margin-bottom: 200px">
            <p style="font-size: 40px; color:white">Центр гео- <br> и гидроинформатики</p>
        </div>
    </div>
</div>
<div class="index-container">
    <div class="index-container-about">
        <h2 style="font-weight: bolder; font-size: 40px;margin-bottom: 0; color: #262626; padding-left: 20px">Коротко о нас</h2>
        <hr style="width: 100% ; color: white">
        <p class="about-ul">Лаборатория геоинформационных систем и технологий дистанционного зондирования Земли предназначена для формирования профессиональных компетенций географов и экологов различных профилей, профессиональная деятельность которых будет осуществляться в ГИС организациях, отраслях народного хозяйства, связанных с природопользованием, сельским хозяйством, лесным хозяйством и природоохранной деятельностью.</p>
        <hr style="width: 100% ; color: white">
        <p style="font-size: 35px; margin-bottom: 0; color: #262626; padding-left: 20px">Направления исследований:</p>
        <div class="about-ul" style="display: flex; width: 100%; flex-flow: nowrap; padding: 0; justify-content: space-between; height: auto">
            <ul class="about-ul" style="margin: 0; padding-left: 40px; background-color: transparent; width: 52%">
                <li class="about-li">Разработка алгоритмов гео-интеллектуальной аналитики эффективности орошения агрофитоценозов на основе данных космического мониторинга;</li>
                <li class="about-li">Разработка алгоритмов идентификации контуров земель сельскохозяйственного назначения, подверженных деградации, на основе технологий ГИС, ДЗЗ и ИИ;</li>
                <li class="about-li">Разработка алгоритмов для оценки биопродуктивности пастбищных угодий на основе данных аэрокосмического мониторинга.</li>
            </ul>
            <img src="/img/etc/napis.png" class="img-about">
        </div>
        <p style="font-size: 35px; margin-bottom: 0; color: #262626; padding-left: 20px">Цели и задачи:</p>
        <div style="display: flex; width: 100%; flex-flow: nowrap; padding: 0; justify-content: space-between; height: auto" class="about-ul">
            <img src="/img/etc/zad.png" class="img-cl" style="padding-top: 50px">
            <ul class="about-ul" style="margin: 0; padding-left: 40px; background-color: transparent; width: 80%">
                <li class="about-li">Cоздание лаборатории федерального уровня, исследования которой будут направлены на применение геоинформационных технологий, дистанционного зондирования земли, глобальных навигационных спутниковых систем и искусственного интеллеката в орошаемом земледелии, мониторинге и деградации/проградации земельных ресурсов</li>
                <li class="about-li">Образовательная и научно-исследовательская деятельность в области дистанционного зондирования Земли (далее — ДЗЗ) и мониторинга природных ресурсов, разработки методов и технологий обработки данных ДЗЗ, создания географических информационных систем (далее — ГИС)</li>
                <li class="about-li">Участие в обучении школьников, студентов, магистров, организации образовательного процесса, а также в повышении квалификации научно-педагогических работников</li>
            </ul>
        </div>
        <p style="font-size: 35px; margin-bottom: 20px; color: #262626; padding-left: 20px">Компетенции:</p>
        <div class="about-ul" style="display: flex; width: 100%; flex-flow: nowrap; padding: 0; justify-content: space-between; height: auto">
            <ul class="about-ul" style="margin: 0; padding-left: 40px; background-color: transparent; width: 100%">
                <li class="about-li">Применять средства и инструменты ГИС для задач анализа и визуализации пространственных сельскохозяйственных данных;</li>
                <li class="about-li">Знать принципы построения инструментальных и программных геоинформационных систем в АПК;</li>
                <li class="about-li">Проводить анализ и выбор программно-технологических платформ при создании геоинформационных систем в сельском хозяйстве;</li>
                <li class="about-li">Сравнивать и выбирать оптимальные алгоритмы для обработки геоданных;</li>
                <li class="about-li">Работать в команде проекта по настройке, эксплуатации и сопровождению геоинформационных систем и сервисов;</li>
                <li class="about-li">Разрабатывать веб-геосервисы для решения задач сельского хозяйства;</li>
                <li class="about-li">Сравнивать и выбирать оптимальные алгоритмы для обработки и анализа данных ДЗЗ;</li>
                <li class="about-li">Разрабатывать алгоритмы обработки данных дистанционного зондирования Земли для решения задач сельского хозяйства;</li>
                <li class="about-li">Применять геоанализ в задачах мониторинга сельскохозяйственных территорий с использованием БПЛА, спутниковых данных и данных наземного мониторинга.</li>
            </ul>
        </div>
        <hr style="width: 100% ; color: white">
        <div style="display: flex; width: 100%; justify-content: space-between; height: 50px; margin-bottom: 20px">
            <h2 style="font-weight: 500; font-size: 40px; color: #262626; padding-left: 20px">Новости лаборатории</h2>
            <a href="{{url('/news')}}"><button class="btn-all-news" style="margin-top: 12px">Все новости</button></a>
        </div>
        <div class="feature">
            @include('blocks/news-container')
        </div>
        <div class="partners_head">
            <hr style="width: 100% ; color: white">
            <h2 style="font-weight: 500; font-size: 40px; color: #262626; padding-left: 20px">Партнеры лаборатории</h2>
        </div>
        <div class="partners">
            <div class="partners_wrapper" >
                <a href="https://exactfarming.com/" class="partners_items" style="background: url(img/etc/par1.png) no-repeat; background-size: cover"></a>
                <a href="https://www.scanex.ru/" class="partners_items" style="background: url(img/etc/par3.png) no-repeat; background-size: cover"></a>
                <a href="https://iki.cosmos.ru/" class="partners_items" style="background: url(img/etc/par2.png) no-repeat; background-size: cover"></a>
            </div>
        </div>
        <div class="partners_head">
            <hr style="width: 100% ; color: white">
            <h2 style="font-weight: 500; font-size: 40px; color: #262626; padding-left: 20px; padding-bottom: 20px">Внутренние партнеры лаборатории в ВУЗе:</h2>
            <p style="font-size: 20px; padding-left: 20px">В составе лаборатории задействованы научные сотрудники РГАУ-МСХА имени К.А. Тимирязева - междисциплинарная команда для разметки и аналитики массивов геоданных (задействованы специалисты кафедры сельскохозяйственных мелиораций, лесоводства и землеустройства, и кафедры гидравлики, гидрологии и управления водными ресурсами, а также ИТ-специалисты Института мелиорации, водного хозяйства и строительства имени А.Н. Костякова)</p>
        </div>
        <!--            <div class="running_line">-->
        <!--                <div class="running_line_wrapper">-->
        <!--                    <marquee behavior="scroll" direction="right" scrollamount="12">-->
        <!--                        <p class="running_line_info">Ключевые партнеры лаборатории</p>-->
        <!--                    </marquee>-->
        <!--                </div>-->
        <!--            </div>-->
    </div>
</div>

@include('blocks/footer')

<script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>

<script>
    $(document).ready ( function() {
        let feed = $('.column');
        let i;
        for (i = 3; i < feed.length; i++) {
            feed[i].style.display = "none";
        }
    });
</script>



</body>
</html>
