@extends('layouts.base')
@include('partials.posts.header')


@section('pageContent')

<h2>Category: {{$category['name']}}</h2>
<h3>Slug: {{$category['slug']}}</h3>
    
@endsection