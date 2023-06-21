<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<header class="header">
    <div class="header-container">
        <div class="logo">
            <a href="{{url('/')}}"><img src="{{asset('img/etc/logo2.png')}}" style="width: 50px"></a>
            <div style="font-size: 20px; line-height: 1; font-weight: bolder">
                <a href="{{url('/')}}" style="text-decoration: none; display: flex; flex-flow: column; padding: 5px">
                    <p class="logo-text-top" style="color: white; margin-bottom: 0; margin-top: 0">ЦЕНТР</p>
                    <div style="display: flex">
                        <p class="logo-text-bottom" style="color: white; font-size: 20px">ГЕО-</p>
                        <p class="logo-text-bottom" style="color: white">&nbspИ&nbsp</p>
                        <p class="logo-text-bottom" style="color: white">ГИДРОИНФОРМАТИКИ</p>
                    </div>
                </a>
            </div>
        </div>
        <i class='bx bx-menu bx-flip-horizontal' id="menu-icon"></i>
        <nav>
            <ul>
                <li class="header-nav-li"><a href="{{url('/cases')}}" class="a-nav">КЕЙСЫ</a></li>
                <li class="header-nav-li"><a href="{{url('/rnf')}}" class="a-nav">РНФ</a></li>
                <li class="header-nav-li"><a href="{{url('/equipment')}}" class="a-nav">ОБОРУДОВАНИЕ</a></li>
                <li class="header-nav-li"><a href="{{url('/contacts')}}" class="a-nav">КОНТАКТЫ</a></li>
            </ul>
        </nav>
    </div>
</header>

<script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>

<script>
    $(document).ready ( function() {
        document.addEventListener('scroll', () => {
            header = document.querySelector('header')

            if (window.scrollY > 100 ) {
                header.style.background = 'linear-gradient(120deg,  #1349a1, #0a8c33)'
                header.style.boxShadow = '0 0 10px rgba(0,0,0,0.5)'
            } else {
                header.style.background = 'transparent'
                header.style.boxShadow = 'none'
            }
        })

        let menu = document.querySelector('#menu-icon');
        let navlist = document.querySelector('.nav-list');

        menu.onclick = () => {
            menu.classList.toggle('bx-x');
            navlist.classList.toggle('open');
        };
    });
</script>

{{--<header>--}}
{{--    <div class="header-container">--}}
{{--        <div class="logo">--}}
{{--            <a href="{{url('/')}}"><img src="/img/etc/logo.png" style="width: 50px; border-radius: 15px;"></a>--}}
{{--            <div style="font-size: 20px; line-height: 1; font-weight: bolder">--}}
{{--                <a href="{{url('/')}}" style="text-decoration: none; display: flex; flex-flow: column; padding: 5px">--}}
{{--                    <p class="logo-text-top" style="color: #3a713b; margin-bottom: 0; margin-top: 0">АПК</p>--}}
{{--                    <div style="display: flex">--}}
{{--                        <p class="logo-text-bottom" style="color: #3a713b">РУС</p>--}}
{{--                        <p class="logo-text-bottom" style="color: #4bb44d">АГРО</p>--}}
{{--                        <p class="logo-text-bottom" style="color: #3a713b">АЛЬЯНС</p>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <nav style="align-items: center">--}}
{{--            <ul class="nav-list">--}}
{{--                <li class="header-nav-li"><a href="{{url('/category')}}" class="a-nav">Продукция</a>--}}
{{--                    <ul class="list-container">--}}
{{--                        <div style="border: 1px solid rgba(128, 128, 128, 0.5); border-top: none;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px">--}}

{{--                        </div>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="header-nav-li"><a href="{{url('/company')}}" class="a-nav">Компания</a></li>--}}
{{--                <li class="header-nav-li"><a href="{{url('/about')}}" class="a-nav">Контакты</a></li>--}}
{{--                @if (\Illuminate\Support\Facades\Auth::check())--}}
{{--                    <a href="{{url('/profile')}}"><li class="header-nav-li"><button class="btn-nav">Кабинет</button></li></a>--}}
{{--                    <li class="header-nav-li"><a href="{{url('/basket')}}"><button class="btn-nav-basket">&nbsp<div class="count"></div></button></a></li>--}}
{{--                @else--}}
{{--                    <li class="header-nav-li"><button class="btn-nav open_popup_singin" id="open_popup_singin" onclick="openPopUpAuth()">Войти</button></li>--}}
{{--                    <li class="header-nav-li"><button class="btn-nav-basket open_popup_singin" onclick="openPopUpAuth()">&nbsp</button></li>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</header>--}}
{{--<!--<div class="header-text">-->--}}
{{--<!--    <a href="index.blade.php"><img src="img/etc/logo.png" class="img-logo"></a>-->--}}
{{--<!--    <div class="container-header-text-main">-->--}}
{{--<!--        <a href="index.blade.php"style="color: #3a713b; text-decoration: none">АПК<br>РУС<a href="/"style="color: #4bb44d; text-decoration: none">АГРО</a><a href="index.blade.php"style="color: #3a713b; text-decoration: none">АЛЬЯНС</a>-->--}}
<!--    </div>-->
<!--    <div class="container-header-text-end">-->
<!--        <ul class="list-all">-->
<!--            <li class="li-main"><a href="/category_place.php"><button class="btn-link">Продукция<i class="fa fa-caret-down"></i></button></a>-->
<!--                <ul class="list-container">-->
<!--                    <li class="li-blocks"><a href="catalog_class.php?class=1" class="li-blocks-underclass" style="text-decoration: none">Семена</a></li>-->
<!--                    <li class="li-blocks"><a href="catalog_class.php?class=2" class="li-blocks-underclass" style="text-decoration: none">Злаковые</a></li>-->
<!--                    <li class="li-blocks"><a href="catalog_class.php?class=3" class="li-blocks-underclass" style="text-decoration: none">Бобовые</a></li>-->
<!--                    <li class="li-blocks" style="border-bottom-right-radius: 15px;border-bottom-left-radius: 15px"><a href="catalog_class.php?class=4" class="li-blocks-underclass" style="text-decoration: none">Масличные</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="li-main"><a href="/company.php"><button class="btn-link">Компания</button></a></li>-->
<!--            <li class="li-main"><a href="/about.php"><button class="btn-link">Контакты</button></a></li>-->
<!--            <li class="li-main"><a href="#"><button class="open_popup_singin" id="open_popup_singin">Войти</button></a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->





