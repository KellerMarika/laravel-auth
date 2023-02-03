@extends('layouts.app')

{{--        'title' => 'requred|min: 80|max:225',
            'type' => 'requred|max:225',
            'completed' => 'boolean',
            'img' => 'string',
            'description' => 'string' --}}

@section('content')
    {{-- solo il superadmin, se è solo loggato può o contattarti per una collaborazione --}}
    <h1>form crea progetto che rimanda allo store</h1>


    {{-- rintraccia qualsiasi errore --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            I dati inseriti non sono validi:

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    {{-- QUESTA COSA è TROOOOOOOPPPO RIPTITIVA  --}}

    <div class="container w-75">
        <form action="{{ route('admin.projects.store') }}" method="POST" class="row">
            @csrf

            {{-- title --}}
            <div class="input-container pb-2 col-12 col-md-6">
                <label class="form-label">TITOLO</label>
                <input type="text"
                    class="form-control 
                    @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                    name="title" value="{{ $errors->has('title') ? '' : old('title') }}">

                @error('title')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @elseif(old('title'))
                    <div class="valid-feedback"> ok </div>
                @enderror
            </div>

            {{-- type (dovrebbe poi diventare select) --}}
            <div class="input-container pb-2 col-12 col-sm-8 col-md-4">
                <label class="form-label">Tipo</label>
                <input type="text"
                    class="form-control 
                    @error('type') is-invalid @elseif(old('type')) is-valid @enderror"
                    name="type" value="{{ $errors->has('type') ? '' : old('type') }}">

                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('type'))
                    <div class="valid-feedback">ok </div>
                @enderror
            </div>

            {{-- checkbox --}}

            
            <div class="input-container pb-2 col-12  col-sm-4 col-md-2 ps-3">
                <div class="form-check form-switch p-0">

                    <label class="form-check-label" for="completed">completato</label>

                    <div class="form-check form-switch pt-2">
                        <input type="hidden" name="completed" value="0" >
                        <input
                        class="form-check-input {{--  @error('type') is-invalid @elseif(old('type')) is-valid @enderror --}}"
                        value="1" type="checkbox" role="switch" id="completed" name="completed"
                        {{ old('completed', 1) ? 'checked' : '' }}>

                    </div>
                </div>
              {{--   @error('type')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @elseif(old('type'))
                    <div class="valid-feedback"> ok </div>
                @enderror --}}
            </div>



            {{-- img --}}
            <div class="input-container pb-2">
                <label class="form-label">IMMAGINE</label>
                <input type="text"
                    class="form-control
                    @error('img') is-invalid @elseif(old('img')) is-valid @enderror"
                    name="img" value="{{ $errors->has('img') ? '' : old('img') }}">


                @error('img')
                    <div class="invalid-feedback">{{ $message }} </div>
                @elseif(old('img'))
                    <div class="valid-feedback"> ok </div>
                @enderror
            </div>

            {{-- description --}}
            <div class="input-container pb-2">
                <label class="form-label">Descrizione</label>
                <textarea name="description" cols="30" rows="5"
                    class="form-control 
                    @error('description') is-invalid @elseif(old('description')) is-valid @enderror">
                    {{ old('description') }}</textarea>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('description'))
                    <div class="valid-feedback">ok</div>
                @enderror
            </div>

            {{-- opzioni --}}
            <div class="p-3">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Annulla</a>

                <button class="btn btn-secondary">crea progetto</button>


            </div>

        </form>
    </div>
@endsection

{{-- nserire un suggerimento --}}
