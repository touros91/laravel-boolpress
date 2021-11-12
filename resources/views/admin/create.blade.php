@extends('layouts.base')

@section('pageContent')

<h1>Inserisci un nuovo post</h1>

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
		<label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Insert content">{{ old('content') }}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection
