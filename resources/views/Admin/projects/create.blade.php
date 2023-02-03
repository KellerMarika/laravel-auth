@extends('layouts.app')

{{--        'title' => 'requred|min: 80|max:225',
            'type' => 'requred|max:225',
            'completed' => 'boolean',
            'img' => 'string',
            'description' => 'string' --}}

@section('content')
    {{-- solo il superadmin, se è solo loggato può o contattarti per una collaborazione --}}
    <h1>form crea progetto che rimanda allo store</h1>

    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="POST" class="row">
            @csrf

            <div class="input-container col-6">
                <label class="form-label">TITOLO</label>
                <input type="text"
                    class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                    name="title" value="{{ $errors->has('title') ? '' : old('title') }}">


                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @elseif(old('title'))
                    <div class="valid-feedback">
                        ok
                    </div>
                @enderror
            </div>


            <div class="input-container col-4">
                <label class="form-label">Tipo</label>
                <input type="text"
                    class="form-control @error('type') is-invalid @elseif(old('type')) is-valid @enderror"
                    name="type" value="{{ $errors->has('type') ? '' : old('type') }}">


                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @elseif(old('type'))
                    <div class="valid-feedback">
                        ok
                    </div>
                @enderror
            </div>

            <div class="input-container col-2">
                <div class="form-check form-switch">
                    <input name="completed"
                        class="form-check-input  @error('type') is-invalid @elseif(old('type')) is-valid @enderror"
                        type="checkbox" id="completed">
                    <label class="form-check-label" for="completed">completato</label>
                </div>

                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @elseif(old('type'))
                    <div class="valid-feedback">
                        ok
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <label class="form-label">IMMAGINE</label>
                <input type="text"
                    class="form-control @error('img') is-invalid @elseif(old('img')) is-valid @enderror"
                    name="img" value="{{ $errors->has('img') ? '' : old('img') }}">


                @error('img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @elseif(old('img'))
                    <div class="valid-feedback">
                        ok
                    </div>
                @enderror
            </div>
            <div class="input-container">
                <label class="form-label">Descrizione</label>
                <input type="text"
                    class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror"
                    name="description" value="{{ $errors->has('description') ? '' : old('description') }}">


                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @elseif(old('description'))
                    <div class="valid-feedback">
                        ok
                    </div>
                @enderror
            </div>

            <div class="p-3">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Annulla</a>

                <button class="btn btn-secondary">crea progetto</button>

            
            </div>

        </form>
    </div>
@endsection

{{-- nserire un suggerimento --}}
