@extends('layouts.app')
@section('content')
    @php
        $title = ' SHOW project n°' . $project->id ;
    @endphp

@section('title', $title)


@dump($project)

<img src="{{ asset('storage/' . $project->cover_img) }}" alt="{{ $project->cover_img }}">
@endsection

