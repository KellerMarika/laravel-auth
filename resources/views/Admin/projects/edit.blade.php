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
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="row">
            @method('PUT')
            @csrf


            {{-- title --}}
            <div class="input-container pb-2 col-12 col-md-6">
                <label class="form-label">TITOLO</label>
                <input type="text"
                    class="form-control 
                    @error('title') is-invalid  @enderror"
                    name="title" value="{{ old('title', $project->title)  }}">

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
                    @error('type') is-invalid  @enderror"
                    name="type" value="{{ old('type', $project->type)  }}">
                   
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
                        <input class="form-check-input {{--  @error('type') is-invalid @elseif(old('type')) is-valid @enderror --}}" value="1" type="checkbox" role="switch"
                            id="completed" name="completed" {{ old('completed', 1) ? 'checked' : '' }}>

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
                    @error('img')is-invalid  @enderror"
                    name="img" value="{{ old('img',$project->img)}}">


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
                   {{ old('description', $project->description)  }}</textarea>

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
