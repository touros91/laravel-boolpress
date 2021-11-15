@extends('layouts.base')
@include('partials.posts.header')


@section('pageContent')

<h1>Insert new post</h1>

<form action="{{route("admin.store")}}" method="POST">
	@csrf

	<div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Insert title" value="{{ old('title') }}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="form-group">
		<label for="content">Content</label>
        <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="Insert content">{{ old('content') }}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection
