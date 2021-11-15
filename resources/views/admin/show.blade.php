@extends('layouts.base')
@include('partials.admin.header')


@section('pageContent')

<h1>Titolo Post: {{$post['title']}}</h1>
<p>Contenuto: {{$post['content']}}</p>
    
@endsection