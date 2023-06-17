<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.index.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo2.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Лаборатория ГИС и ДЗЗ</title>
</head>

<body>

@include('auth.header')

<div class="col-md-12">
    <div class="container-index">
        <div>
            <h1 style="color: black">Сотрудники</h1>
        </div>
        <div class="container-table">
            <table class="table">
                <tbody>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        ФИО
                    </th>
                    <th>
                        Действия
                    </th>
                </tr>
                @foreach($staff as $staff)
                <tr>
                    <td>{{$staff->id}}</td>
                    <td>{{$staff->name}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="#" method="POST">
                                <a class="btn btn-success" type="button" href="#">Открыть</a>
                                <a class="btn btn-warning" type="button" href="#">Редактировать</a>
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <a class="btn btn-success" type="button"
               href="#">Добавить сотрудника</a>
        </div>
    </div>
</div>
</body>
