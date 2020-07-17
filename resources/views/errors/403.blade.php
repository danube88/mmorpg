@extends('layouts.errors')

@section('content')
  <div class="title m-b-md">
    403 | {{ __('Forbidden') }}
  </div>
  <div class="nav-link link">
    <a class="badge badge-light" href="{{ route('home') }}">{{ __("Home") }}</a>
  </div>
@endsection
