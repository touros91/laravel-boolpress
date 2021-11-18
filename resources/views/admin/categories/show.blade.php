@extends('layouts.base')
@include('partials.admin.categories.header')


@section('pageContent')

<h2>Category: {{$category['name']}}</h2>
<h3>Slug: {{$category['slug']}}</h3>
<h5>Posts list associated to this category:</h5>
<ul>
    @forelse ($category['posts'] as $post)
        <li>{{$post['title']}}</li>
    @empty
        <p>There are no associated posts to this category.</p>
    @endforelse
</ul>
    
@endsection