@extends('layouts.base')
@include('partials.admin.posts.header')


@section('pageContent')

    <h1>{{$post['title']}}</h1>
    @if ($post['category'])
        <h3>Category: {{$post['category']['name']}}</h3>
    @endif

    @if (count($post['tags']) > 0)
        <h5>Tags:</h5>
        @foreach ($post['tags'] as $tag)
            <span class="badge badge-primary">{{$tag['name']}}</span> 
        @endforeach
    @endif
    <p>{{$post['content']}}</p>
    
@endsection