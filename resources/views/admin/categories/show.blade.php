@extends('layouts.base')
@include('partials.admin.categories.header')


@section('pageContent')

<h2>Category: {{$category['name']}}</h2>
<h3>Slug: {{$category['slug']}}</h3>
    
@endsection