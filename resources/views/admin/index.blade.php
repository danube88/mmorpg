@extends('adminlte::page')

@section('title', 'Dashboard')

@section('right-sidebar')
    <div class="lang">
        {{ __('Language')}}:
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <span class="flag-icon flag-icon-{{ LaravelLocalization::getCurrentLocale() }}"></span><div style="text-transform: uppercase; display: inline-block;">{{ LaravelLocalization::getCurrentLocale() }}</div><span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <div class="nav-link" style="display:flex;">
                        <span class="flag-icon flag-icon-{{ $localeCode }}"     style="width:35px;"></span>
                        <a class="dropdown-item" rel = "alternate" hreflang = "{{ $localeCode }}" href ="{{ LaravelLocalization::getLocalizedURL( $localeCode, null, [], true)}}">
                        {{ $properties['native'] }}
                        </a>
                    </div>
                    @endforeach
                </div>
            </li>
        </ul>
    </div>
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flag-style.css') }}" rel="stylesheet">
@stop

@section('js')
    <script>  console.log('Hi!'); </script>
@stop
