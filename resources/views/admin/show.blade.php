@extends('layouts.base')
@include('partials.posts.header')


@section('pageContent')

<h1>{{$post['title']}}</h1>
<p>{{$post['content']}}</p>
    
@endsection