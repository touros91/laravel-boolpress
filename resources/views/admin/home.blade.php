@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ route('admin.home')}}">All Posts</a>
    </div>
    <div class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ route('admin.create')}}">Creare New Post</a>
    </div>
  </div>
      <h2 class="mt-3">Manage your posts</h2>
  
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
                  <a href="{{route("admin.show", $post["id"])}}"><button type="button" class="btn btn-primary">View</button></a>
              </td>
              <td>
                  <a href="{{route("admin.edit", $post["id"])}}"><button type="button" class="btn btn-warning">Edit</button></a>
              </td>
              <td>
                  <form action="{{route('admin.destroy', $post->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
  
                      <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')">
                  </form>
              </td>
          </tr>
            @endforeach
          </tbody>
      </table>
@endsection
