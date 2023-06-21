@extends('auth.layouts.master')

@section('title', 'Новости')

@section('content')
    <div class="container-table">
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Название
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($feeds as $feed)
{{--                <img src="{{Storage::url($feed->img)}}" height="240px">--}}
                <tr>
                    <td>{{$feed->id}}</td>
                    <td>{{$feed->name}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{route('feeds.destroy',$feed)}}" method="POST">
                                <a class="btn btn-success" type="button" href="{{route('feeds.show',$feed)}}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{route('feeds.edit',$feed)}}">Редактировать</a>
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Удалить">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <a class="btn btn-success" type="button"
           href="{{route('feeds.create')}}">Добавить новость</a>
    </div>
@endsection

