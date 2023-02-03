@extends('layouts.app')



@section('content')
    <h1>Lista progetti</h1>
    @dump($projects[0])
    {{-- ciclo su argomento categoria --}}
    {{-- ciclo su projects quelli che corrispondono alla categoria --}}
    <a href="{{ url('admin/projects/create') }}" class="btn btn-link">crea un nuovo progetto</a>
@endsection
