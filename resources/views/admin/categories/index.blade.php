@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ route('admin.categories.index')}}">All Categories</a>
    </div>
    <div class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ route('admin.categories.create')}}">Create New Category</a>
    </div>
  </div>
      <h2 class="mt-3">Manage your categories</h2>

      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
      </div>
      @endif
      
      <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Slug</th>
              <th scope="col">Action</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <th scope="row">{{$category["id"]}}</th>
              <td>{{$category["name"]}}</td>
              <td>{{$category["slug"]}}</td>
              <td>
                  <a href="{{route("admin.categories.show", $category["id"])}}"><button type="button" class="btn btn-primary">View</button></a>
              </td>
              <td>
                  <a href="{{route("admin.categories.edit", $category["id"])}}"><button type="button" class="btn btn-warning">Edit</button></a>
              </td>
              <td>
                  <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
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
