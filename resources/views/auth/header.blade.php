<link rel="stylesheet" href="{{asset('css/admin.header.css')}}">

<header class="header">
    <div class="header-container">
        <nav>
            <ul>
                <li class="header-nav-li"><a href="{{url('/admin/box')}}" class="a-nav">КЕЙСЫ</a></li>
                <li class="header-nav-li"><a href="{{url('/admin/news')}}" class="a-nav">НОВОСТИ</a></li>
                <li class="header-nav-li"><a href="{{url('/admin/equipment')}}" class="a-nav">ОБОРУДОВАНИЕ</a></li>
                <li class="header-nav-li"><a href="{{url('/admin/staff')}}" class="a-nav">СОТРУДНИКИ</a></li>
            </ul>
        </nav>
        <div class="header-nav-li" style="padding-bottom: 15px">
            <a href="{{url('/')}}" class="a-nav">ВЕРНУТЬСЯ НА САЙТ</a>
            <a href="#" class="a-nav" style="margin-right: 40px">ВЫЙТИ</a>
        </div>
    </div>
</header>
