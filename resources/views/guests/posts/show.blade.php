@extends('layouts.blog')

@section('pageContent')

<h1>{{$post['title']}}</h1>
<p>{{$post['content']}}</p>
<p class="blog-post-meta">{{ $post->created_at->format('d-m-Y') }}  <a href="#">Andrea</a></p>
    
@endsection