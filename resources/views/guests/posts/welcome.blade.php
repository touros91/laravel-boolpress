@extends('layouts.blog')

@section('pageContent')

  @foreach ($posts as $post)    
    <a href="{{route("show", $post["slug"])}}">
      <h2 class="mt-3">{{$post["title"]}}</strong> </h2>
    </a>
    <br>
    <p class="mb-5">{{$post["content"]}}</p>
  @endforeach

@endsection