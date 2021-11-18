@extends('layouts.base')
@include('partials.admin.categories.header')

@section('pageContent')

<h1>Edit category: {{$category["name"]}}</h1>

<form action="{{route("admin.categories.update", $category["id"])}}" method="POST">
	@csrf
    @method("PUT")

	<div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Insert name" value="{{old('name') ? old('name') : $category['name']}}">

		@error('name')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
	
	<button type="submit" class="btn btn-primary">Edit</button>
  </form>
    
@endsection