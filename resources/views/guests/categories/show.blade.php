@extends('layouts.blog')

@section('pageContent')
    <h1 class="blog-post-title">{{$category['name']}}</h1>
    <h2>Tutti i post associati a questa categoria</h2>
    <ul>
        @foreach ($category['posts'] as $post)
            <li><a href="{{route('show', $post['slug'])}}">{{$post['title']}}</a> </li>
        @endforeach

    </ul>
@endsection