@extends('layouts.app')

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
        <form class="row" action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
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

            {{-- category (dovrebbe poi diventare select) --}}
            <div class="input-container pb-2 col-12 col-sm-8 col-md-4">
                <label class="form-label">Categoria</label>
                <input type="text"
                    class="form-control 
                    @error('category') is-invalid @elseif(old('category')) is-valid @enderror"
                    name="category" value="{{ $errors->has('category') ? '' : old('category') }}">

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
                        {{-- 2 imput per raccogliere true o false subito --}}
                        <input type="hidden" name="completed" value="0">
                        <input class="form-check-input {{--  @error('type') is-invalid @elseif(old('type')) is-valid @enderror --}}" value="1" type="checkbox" role="switch"
                            id="completed" name="completed" {{ old('completed', 1) ? 'checked' : '' }}>

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
                <input type="text"
                    class="form-control 
        @error('languages') is-invalid @elseif(old('languages')) is-valid @enderror"
                    name="languages" value="{{ $errors->has('languages') ? '' : old('languages') }}">

                @error('languages')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('languages'))
                    <div class="valid-feedback">ok </div>
                @enderror
            </div>


            <div class="input-container pb-2 col-12 col-sm-8 col-md-4">
                <label class="form-label" for="level">Difficoltà</label>
                <select
                    class="form-control
                    @error('level') is-invalid @elseif(old('level')) is-valid @enderror"
                    id="level" name="level">
                        <option value="easy">easy</option>
                        <option value="medium">medium</option>
                        <option value="hard">hard</option>
                        <option value="@die" selected>@die</option>
                </select>
                @error('level')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('level'))
                    <div class="valid-feedback">ok </div>
                @enderror
            </div>



            {{-- cove
            {{-- level (dovrebbe poi diventare select) --}}
          {{--   <div class="input-container pb-2 col-12 col-sm-8 col-md-4">
                <label class="form-label" id="">Difficoltà</label>
                <input type="text"
                    class="form-control 
                    @error('level') is-invalid @elseif(old('level')) is-valid @enderror"
                    name="level" value="{{ $errors->has('level') ? '' : old('level') }}">

                @error('level')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('level'))
                    <div class="valid-feedback">ok </div>
                @enderror
            </div> --}}




            {{-- cover_img --}}
            <div class="input-container pb-2">
                <label class="form-label">IMMAGINE</label>
                <input type="file" class="form-control
                    @error('cover_img') is-invalid  @enderror"
                    name="cover_img" value="{{ old('cover_img') }}">


                @error('cover_img')
                    <div class="invalid-feedback">{{ $message }} </div>
                    {{--  @elseif(old('cover_img'))
                    <div class="valid-feedback"> ok </div> --}}
                @enderror
            </div>

            {{-- description --}}
            <div class="input-container pb-2">
                <label class="form-label">Descrizione</label>
                <textarea name="description" cols="30" rows="3"
                    class="form-control 
                    @error('description') is-invalid @elseif(old('description')) is-valid @enderror">
                    {{ old('description') }}</textarea>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('description'))
                    <div class="valid-feedback">ok</div>
                @enderror
            </div>

            {{-- link --}}
            <div class="input-container pb-2 col-12 ">
                <label class="form-label">github url</label>
                <input type="url"
                    class="form-control 
        @error('languages') is-invalid @elseif(old('github_link')) is-valid @enderror"
                    name="github_link" value="{{ $errors->has('github_link') ? '' : old('github_link') }}">

                @error('github_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @elseif(old('github_link'))
                    <div class="valid-feedback">ok </div>
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
