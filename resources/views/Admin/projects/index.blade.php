@extends('layouts.app')



@section('content')
    <h1>Lista progetti</h1>
    
    {{-- ciclo su argomento categoria --}}
    {{-- ciclo su projects quelli che corrispondono alla categoria --}}

<div class="projects-container container">
    <div class="row">
        <div class="col-8">

        </div>
    </div>
</div>

    @dump($projects)
    <a href="{{ url('admin/projects/create') }}" class="btn btn-link">crea un nuovo progetto</a>
@endsection
