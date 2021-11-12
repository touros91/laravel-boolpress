@extends('layouts.base')

@section('pageContent')
    <h1>Gestisci i tuoi Posts</h1>

    <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <th scope="row">{{$post["id"]}}</th>
            <td>{{$post["title"]}}</td>
            <td>{{$post["slug"]}}</td>

            <td>
                <a href=""><button type="button" class="btn btn-primary">View</button></a>
            </td>
            
        </tr>
          @endforeach
        </tbody>
    </table>
@endsection