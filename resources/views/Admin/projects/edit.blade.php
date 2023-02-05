@extends('layouts.app')

{{--        'title' => 'requred|min: 80|max:225',
            'type' => 'requred|max:225',
            'completed' => 'boolean',
            'img' => 'string',
            'description' => 'string' --}}

@section('content')
    {{-- solo il superadmin, se è solo loggato può o contattarti per una collaborazione --}}
    <h1>form crea modifica il progetto di cui passo l'id</h1>


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
        <form class="row" action="{{ route('admin.projects.update', $project->id) }}" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf


            {{-- title --}}
            <div class="input-container pb-2 col-12 col-md-6">
                <label class="form-label">TITOLO</label>
                <input type="text" class="form-control 
                    @error('title') is-invalid  @enderror"
                    name="title" value="{{ old('title', $project->title) }}">

                @error('title')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @elseif(old('title'))
                    <div class="valid-feedback"> ok </div>
                @enderror
            </div>

            {{-- category (dovrebbe poi diventare select) --}}
            <div class="input-container pb-2 col-12 col-sm-8 col-md-4">
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control 
        @error('category') is-invalid @enderror" name="category"
                    value="{{ old('category', $project->category) }}">

                @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('category'))
                    <div class="valid-feedback">ok </div>
                @enderror
            </div>


            {{-- checkbox --}}

            <div class="input-container pb-2 col-12  col-sm-4 col-md-2 ps-3">
                <div class="form-check form-switch p-0">
                    <label class="form-check-label" for="completed">completato</label>

                    <div class="form-check form-switch pt-2">
                        <input type="hidden" name="completed" value="0">
                        <input class="form-check-input  @error('type') is-invalid @enderror " value="1" type="checkbox"
                            role="switch" id="completed" name="completed"
                            {{ old('completed', $project->completed) ? 'checked' : '' }}>
                    </div>
                </div>
                @error('type')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @elseif(old('type'))
                    <div class="valid-feedback"> ok </div>
                @enderror
            </div>

            {{-- linguaggi --}}
            <div class="input-container pb-2 col-12 col-md-8 ">
                <label class="form-label">linguaggi</label>
                <input type="text" class="form-control 
            @error('languages') is-invalid  @enderror"
                    name="languages" value="{{ old('languages', $project->languages) }}">

                @error('languages')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('languages'))
                    <div class="valid-feedback">ok </div>
                @enderror
            </div>



            {{-- funziona ma non visualizza!! --}}
            {{--      @dump (old('level',$project->level)) --}}

            {{-- level --}}
            <div class="input-container pb-2 col-12 col-md-4">
                <label class="form-label" for="level">Difficoltà</label>
                <select class="form-control selectpicker
                        @error('level') is-invalid @enderror"
                    id="level" name="level">
                    <option value=""></option>
                    <option value="easy" {{ old('level', $project->level) === 'easy' ? 'selecteded' : '' }}>easy</option>
                    <option value="medium" {{ old('level', $project->level) === 'medium' ? 'selecteded' : '' }}>medium
                    </option>
                    <option value="hard" {{ old('level', $project->level) === 'hard' ? 'selecteded' : '' }}>hard</option>
                    <option value="@die" {{ old('level', $project->level) === '@die' ? 'selecteded' : '' }}>@die</option>
                </select>

                @error('level')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('level'))
                    <div class="valid-feedback">ok </div>
                @enderror
            </div>


            {{-- cover_img --}}
            <div class="input-container pb-2">
                <label class="form-label">IMMAGINE</label>
                <input type="file" class="form-control
                    @error('img')is-invalid  @enderror"
                    name="img">


                @error('img')
                    <div class="invalid-feedback">{{ $message }} </div>
                @enderror
            </div>

            {{-- description --}}
            <div class="input-container pb-2">
                <label class="form-label">Descrizione</label>
                <textarea name="description" rows="3"
                    class="form-control 
                    @error('description') is-invalid @enderror">
                   {{ old('description', $project->description) }}</textarea>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('description'))
                    <div class="valid-feedback">ok</div>
                @enderror
            </div>


            {{-- opzioni --}}
            <div class="p-3">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Annulla</a>

                <button class="btn btn-secondary">salva le modifiche al progetto</button>


            </div>

        </form>
    </div>
@endsection
