@extends('layouts.website')

@section('pageContent')

<h1>Titolo Post: {{$post['title']}}</h1>
<p>Contenuto: {{$post['content']}}</p>
    
@endsection