<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/box.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo2.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Кейсы лаборатории</title>
</head>
<body>

@include('blocks/header')

<div class="box-container">
    <div class="box-container-pic">
        <div style="padding-top: 150px; display: flex; width: 100%; justify-content: center; padding-bottom: 0; column-gap: 25px">
            <h1 style="color: white;">Кейсы лаборатории</h1>
            <i class='bx bx-rocket' style="font-size: 50px; color: white"></i>
        </div>
    </div>
    <div class="box-container-about">
        @foreach($cases as $key => $case)
            @if ($key %2 == 0)
                <div class="box">
                    <a href="{{url('/case/' . $case->id)}}" class="box-head">
                        <p>{{$case->name}}</p>
                    </a>
                    <div class="box-content">
                        <div class="box-left" style="background: url({{asset($case->img)}}) no-repeat; background-size: cover; animation: fade-in-left 2.5s;"></div>
                        <a href="{{url('/case/' . $case->id)}}" class="box-right" style="animation: fade-in-right 2.5s;">
                            <div class="box-right-column">
                                <p style="font-size: 22px; font-weight: bolder; margin-bottom: 5px">Проблема:</p>
                                <p>{{$case->problem}}</p>
                            </div>
                            <div class="box-right-column">
                                <p style="font-size: 22px; font-weight: bolder; margin-bottom: 5px">Цель:</p>
                                <p>{{$case->target}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @else
                <div class="box">
                    <a href="{{url('/case/' . $case->id)}}" class="box-head">
                        <p>{{$case->name}}</p>
                    </a>
                    <div class="box-content">
                        <a href="{{url('/case/' . $case->id)}}" class="box-right" style="animation: fade-in-left 2.5s;">
                            <div class="box-right-column">
                                <p style="font-size: 22px; font-weight: bolder; margin-bottom: 5px">Проблема:</p>
                                <p>{{$case->problem}}</p>
                            </div>
                            <div class="box-right-column">
                                <p style="font-size: 22px; font-weight: bolder; margin-bottom: 5px">Цель:</p>
                                <p>{{$case->target}}</p>
                            </div>
                        </a>
                        <div class="box-left" style="background: url({{asset($case->img)}}) no-repeat; background-size: cover; animation: fade-in-right 2.5s;"></div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
<!--        <div class="box" style="margin-bottom: 25px">-->
<!--            <div>-->
<!--                <a href="#" class="heading"; style="background: white; padding: 10px; border-radius: 10px">Кейс №2. Построение цифровой модели водосборной территории и расчет характеристик Ремонтненского водохранилища</a>-->
<!--            </div>-->
<!--            <div style="width: 100%; display: flex; justify-content: space-between">-->
<!--                <div class="description_box" style="width: 60% ;background: white; border-radius: 25px; padding: 25px; display: flex; margin-right: 10px">-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Проблема:</p>-->
<!--                        <p>Актуализация проекта «Правила использования водных ресурсов Ремонтненского водохранилища», разработанного в 2014 г., с учетом требований действующего законодательства Российской Федерации.</p>-->
<!--                    </div>-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Цель:</p>-->
<!--                        <p>Провести анализ изменений нормативных (характерных) уровней воды в водохранилище, параметров гидроузла, произошедших за период эксплуатации водохранилища.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="img_box2" style="width: 40%">-->
<!--                    <img src="img/etc/box2.1.png" style="width: 100%; border-radius: 25px">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box" style="margin-bottom: 25px">-->
<!--            <div>-->
<!--                <a href="#" class="heading"; style="background: white; padding: 10px; border-radius: 10px">Кейс №3. Построение ЦМР, формирование слоев почвенных характеристик и типов землепользования для загрузки в ГИС-модуль программы DWAT</a>-->
<!--            </div>-->
<!--            <div style="width: 100%; display: flex; justify-content: space-between">-->
<!--                <div class="img_box">-->
<!--                    <img src="img/etc/box3.1.png" style="width: 100%; border-radius: 25px">-->
<!--                </div>-->
<!--                <div class="description_box" style="width: 100% ;background: white; border-radius: 25px; padding: 25px; display: flex; margin-left: 10px">-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Проблема:</p>-->
<!--                        <p>Проверка гипотезы об адекватности результатов моделирования паводкового стока реальным данным на водосборе Краснодарского водохранилища с помощью математической модели Dynamic Water Resources Assessment Tool</p>-->
<!--                    </div>-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Цель:</p>-->
<!--                        <p>Построить ЦМР, сформировать слои почвенных характеристик и типов землепользования для загрузки в ГИС-модуль программы DWAT.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box" style="margin-bottom: 25px">-->
<!--            <div>-->
<!--                <a href="#" class="heading"; style="background: white; padding: 10px; border-radius: 10px">Кейс №4. Разработка методики пространственно-временного анализа результатов гидрохимического мониторинга поверхностных водных объектов</a>-->
<!--            </div>-->
<!--            <div style="width: 100%; display: flex; justify-content: space-between">-->
<!--                <div class="description_box" style="width: 100% ;background: white; border-radius: 25px; padding: 25px; display: flex; margin-right: 10px">-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Проблема:</p>-->
<!--                        <p>Качество вод Химкинского водохранилища оказывает влияние на качество водных ресурсов Москвы-реки, используемой для водоснабжения и рекреации.</p>-->
<!--                    </div>-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Цель:</p>-->
<!--                        <p>Разработать методику пространственно-временного анализа результатов гидрохимического мониторинга поверхностных водных объектов.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="img_box2">-->
<!--                    <img src="img/etc/box4.1.png" style="width: 100%; border-radius: 25px">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box" style="margin-bottom: 25px">-->
<!--            <div>-->
<!--                <a href="#" class="heading"; style="background: white; padding: 10px; border-radius: 10px">Кейс №5. Прототип приложения для фитосанитарного мониторинга агрофитоценозов</a>-->
<!--            </div>-->
<!--            <div style="width: 100%; display: flex; justify-content: space-between">-->
<!--                <div class="img_box">-->
<!--                    <img src="img/etc/box5.1.png" style="width: 100%; border-radius: 25px">-->
<!--                </div>-->
<!--                <div class="description_box" style="width: 100% ;background: white; border-radius: 25px; padding: 25px; display: flex; margin-left: 10px">-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Проблема:</p>-->
<!--                        <p>Защита посевов сельскохозяйственных культур всегда начинается с фитосанитарного мониторинга – чем раньше аграрий узнает о надвигающейся угрозе в виде вредителей или болезней, тем больше шансов сохранить растения и урожай. Эффективное и экономическое обоснование применение средств защиты растений невозможно без ориентирования на полевые данные.</p>-->
<!--                    </div>-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Цель:</p>-->
<!--                        <p>Разработать прототип мобильного приложения для фитосанитарного мониторинга агрофитоценозов для автоматизации процесса сбора данных о сорной компоненте агрофитоценозов в полевых условиях, сократить время его реализации, унифицировать процесс камеральной обработки и анализа собранных данных, а также предоставить возможности их картографической визуализации с использованием данных о местоположении (координатах).</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box" style="margin-bottom: 25px">-->
<!--            <div>-->
<!--                <a href="#" class="heading"; style="background: white; padding: 10px; border-radius: 10px">Кейс №6. Применения БПЛА для оценки сорного компонента в длительном полевом опыте РГАУ – МСХА имени К.А. Тимирязева</a>-->
<!--            </div>-->
<!--            <div style="width: 100%; display: flex; justify-content: space-between">-->
<!--                <div class="description_box" style="width: 100% ;background: white; border-radius: 25px; padding: 25px; display: flex; margin-right: 10px">-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Границы полей</p>-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>sdsadasd</p>-->
<!--                    </div>-->
<!--                    <div style="display: flex; flex-flow: column; width: 49%; font-size: 20px">-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>Многолетний анализ</p>-->
<!--                        <p><span class="material-symbols-outlined">done_all</span>sdsadasd</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="img_box2">-->
<!--                    <img src="img/etc/box6.1.png" style="width: 100%; border-radius: 25px">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>

@include('blocks/footer')

</body>
</html>
