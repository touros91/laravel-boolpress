@extends('layouts.base')
@include('partials.admin.posts.header')


@section('pageContent')

<h1>{{$post['title']}}</h1>
<h4>Category: {{$post['category']['name']}}</h4>
<p>{{$post['content']}}</p>
    
@endsection