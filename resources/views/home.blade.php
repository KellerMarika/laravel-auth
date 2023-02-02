@extends('layouts.app')
@section('content')



    @include('profile.partials.jumbotron')
    @guest
        <h1>non sei nessuno</h1>
    @endguest

    @auth
        <h3>sei</h3>
        @if (Auth::user()->is_admin == true)
            <h1>SUPERADMIN</h1>
        @else
            <h1>LOGGAT0</h1>
        @endif
    @endauth
@endsection