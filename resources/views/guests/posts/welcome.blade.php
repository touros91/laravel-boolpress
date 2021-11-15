@extends('layouts.website')

@section('pageContent')

  @foreach ($posts as $post)    
    <a href="{{route("show", $post["id"])}}">
      {{-- <div scope="row">Article n. {{$post["id"]}}</div> --}}
      <h2 class="mt-3">Post Title: {{$post["title"]}}</strong> </h2>
    </a>
    <br>
    <p class="mb-5">{{$post["content"]}}</p>
  @endforeach

@endsection