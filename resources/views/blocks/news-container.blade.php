<link rel="stylesheet" href="{{asset('css/blocks/news-container.css')}}">

@php ($news =\App\Models\Feed::get())
@foreach($news as $new)
    <a href="{{url('/news/' . $new->id)}}" class="column">
        <img src="{{asset($new->img)}}" class="img_news">
        <div class="a-news">
            <p>{{$new->name}}</p>
        </div>
    </a>
@endforeach
