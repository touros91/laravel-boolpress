@extends('layouts.blog')

@section('pageContent')

    <h1>{{$post['title']}}</h1>
    <p>{{$post['content']}}</p>
    <p class="blog-post-meta">{{ $post->created_at->format('d-m-Y') }}  <a href="#">Andrea</a></p>
    @if ($post['tags'])
        <p>
            @foreach ($post['tags'] as $tag)
                <span class="badge badge-primary">{{$tag['name']}}</span> 
            @endforeach
        </p>
    @endif

    @if ($post['category'])
        <h4>
            Categoria: <a href="{{route("categories.show", $post["category"]["slug"])}}">{{$post['category']['name']}}</a>
        </h4>
    @endif
@endsection