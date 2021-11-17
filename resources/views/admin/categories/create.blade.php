@extends('layouts.base')
@include('partials.posts.header')


@section('pageContent')

<h1>Create a new category</h1>

<form action="{{route("admin.categories.store")}}" method="POST">
	@csrf

	<div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Insert category" value="{{ old('name') }}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection
