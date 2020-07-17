@extends('layouts.errors')

@section('content')
  <div class="title m-b-md">
    404 | {{ __('Not found') }}
  </div>
  <div class="nav-link link">
    <a class="badge badge-light" href="{{ route('home') }}">{{ __("Home") }}</a>
  </div>
@endsection
