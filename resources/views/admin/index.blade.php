@extends('layouts.base')
@extends('layouts.app')

@section('pageContent')
{{-- 
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Dashboard') }}</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <a class="nav-link active" aria-current="page" href="{{ route('admin.home')}}">All Posts</a>

              </div>
          </div>
      </div>
  </div>
</div> --}}
@endsection