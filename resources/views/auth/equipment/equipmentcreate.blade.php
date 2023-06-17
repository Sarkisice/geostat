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
    <div class="container-index" style="color: black">
        <div>
            <h1 style="color: black">Добавить оборудование</h1>
        </div>
        <form method="POST" enctype="multipart/form-data" action="https://www.timpos.ru/admin/events">
            <input type="hidden" name="_token" value="JP0EL8wLJOhWNVLPvnmAucN7r3xLWp4wJe6jZ5Jf">
            <div class="input-group row">
                <label for="name" class="col-sm-2 col-form-label">Название: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" id="name" value="">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                <div class="col-sm-6">
                    <textarea name="description" id="description" cols="72" rows="7"></textarea>
                </div>
            </div>
            <div class="input-group row">
                <label for="image" class="col-sm-2 col-form-label">Изображение: </label>
                <div class="col-sm-10">
                    <label class="btn btn-default btn-file">
                        Загрузить <input type="file" style="display: none;" name="image" id="image">
                    </label>
                </div>
            </div>
            <br>
            <button class="btn btn-success">Сохранить</button>
        </form>
    </div>
</div>

</body>

</html>
