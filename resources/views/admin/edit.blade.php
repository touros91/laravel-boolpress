@extends('layouts.base')

@section('pageContent')

<h1>Edit post: {{$post["title"]}}</h1>

<form action="{{route("admin.update", $post["id"])}}" method="POST">
	@csrf
    @method("PUT")

	<div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Insert title" value="{{old('title') ? old('title') : $post['title']}}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
    <div class="form-group">
        <label for="title">Content</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Insert content" value="{{old('content') ? old('content') : $post['content']}}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	

	<button type="submit" class="btn btn-primary">Edit</button>
  </form>
    
@endsection