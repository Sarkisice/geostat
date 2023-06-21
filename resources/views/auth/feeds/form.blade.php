@extends('auth.layouts.master')

@section('title', 'Новости')

@section('content')
    <div>
        <h1 style="color: black">Добавить новость</h1>
    </div>
    <form method="POST" enctype="multipart/form-data" style="color: black"
          @isset($feed)
              action="{{route('feeds.update',$feed)}}"
          @else
              action="{{route('feeds.store')}}"
        @endisset
    >
        @isset($feed)
            @method('PUT')
        @endisset
        @csrf
        <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Название: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" value="@isset($feed){{$feed->name}}@endisset">
            </div>
        </div>
        <br>
        <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Заголовок: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="title" id="title" value="@isset($feed){{$feed->title}}@endisset">
            </div>
        </div>
        <br>
        <div class="input-group row">
            <label for="description" class="col-sm-2 col-form-label">Описание: </label>
            <div class="col-sm-6">
                <textarea name="des" id="des" cols="72" rows="7">@isset($feed){{$feed->des}}@endisset</textarea>
            </div>
        </div>
        <div class="input-group row">
            <label for="href" class="col-sm-2 col-form-label">Ссылка: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="href" id="href" value="@isset($feed){{$feed->href}}@endisset">
            </div>
        </div>
        <div class="input-group row">
            <label for="image" class="col-sm-2 col-form-label">Изображение: </label>
            <div class="col-sm-10">
                <label class="btn btn-default btn-file">
                    Загрузить <input type="file" style="display: none;" name="img" id="img">
                </label>
            </div>
        </div>
        <div class="input-group row">
            <label for="href" class="col-sm-2 col-form-label">Дата: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="date" id="date" value="@isset($feed){{$feed->date}}@endisset">
            </div>
        </div>
        <br>
        <button class="btn btn-success">Сохранить</button>
    </form>
@endsection
