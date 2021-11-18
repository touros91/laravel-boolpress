@extends('layouts.base')
@include('partials.admin.posts.header')

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
        <input type="text" class="form-control" name="content" id="title" placeholder="Insert content" value="{{old('content') ? old('content') : $post['content']}}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="category">Insert post category</label>
		<select name="category_id" id="category_id" class="form-control">
			<option value="category">Select category</option>
			@foreach ($categories as $category)
			<option value="{{$category['id']}}">{{$category["name"]}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<p>Tags</p>
		@foreach ($tags as $tag)
			<div class="custom-control custom-checkbox"> 
				<input {{$post['tags']->contains($tag['id']) ? "checked" : null}} type="checkbox" name="tags[]" class="custom-control-input" id="tag-{{$tag['id']}}" value="{{$tag['id']}}">
				<label for="tag-{{$tag['id']}}" class="custom-control-label">{{$tag['name']}}</label>
			</div>
		@endforeach
	</div>
	
	<button type="submit" class="btn btn-primary">Edit</button>
  </form>
    
@endsection