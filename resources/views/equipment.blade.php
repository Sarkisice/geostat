<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/equipment.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo2.png')}}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Оборудование лаборатории</title>
</head>
<body>

@include('blocks/header')

<div class="equipment-container">
    <div class="equipment-container-pic">
        <div style="padding-top: 100px; display: flex; width: 100%; justify-content: center; padding-bottom: 0; column-gap: 10px">
            <h1 style="color: white; height: 15%; padding-top: 20px">Оборудование лаборатории</h1>
            <img src="img/etc/tild6332-6564-4434-a661-613432623238__satellite2.svg" class="img-box" style="width: 12%; height: 12%">
        </div>
    </div>
    <div class="equipment-container-about">
        <div class="teh">
            @foreach($equipments as $key => $equipment)
                    <a href="#" class="column" onclick="openPopUpEq({{$key}})">
                        <img src="{{asset($equipment->img)}}" alt="eq1" class="img_obor">
                        <div class="a-obor">
                             <p>{{$equipment->name}}</p>
                        </div>
                     </a>
                    <div class="modal_eq">
                        <div class="popup_container">
                            <div class="modal_eq_body">
                                <div class="left-up" style="border-radius: 25px; width: 45%; height: auto">
                                    <img src="{{asset($equipment->img)}}" alt="eq1" class="img-up">
                                </div>
                                <div class="right-up" style="justify-content: space-between">
                                    <div class="name-up">
                                        <p style="width: 100%; height: auto; font-weight: 500">{{$equipment->name}}</p>
                                    </div>
                                    <div class="des-up">
                                        <p style="width: 100%; height: auto">{{$equipment->des}}</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="bx bx-x" id="close" onclick="closePopUpEq({{$key}})"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</div>


@include('blocks/footer')

<script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
<script>
    modal_eq = $('.modal_eq');

    function openPopUpEq(id){
        modal_eq.eq(id).fadeIn();
    }

    function closePopUpEq(id) {
        modal_eq.eq(id).fadeOut();
    }

    modal_eq_body = $('.modal_eq_body');

    jQuery(function($){
        $(document).mouseup( function(e){
            if ( !modal_eq_body.is(e.target)
                && modal_eq_body.has(e.target).length === 0 ) {
                modal_eq.fadeOut();
            }
        });
    });

    $(document).on('keyup', function(e) {
        if ( e.key == "Escape" ) {
            modal_eq.fadeOut();
        }
    });
</script>

</body>
</html>
