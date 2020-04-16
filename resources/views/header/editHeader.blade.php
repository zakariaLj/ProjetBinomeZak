
{{-- IMPORTANT
    
    cree les controler la table et model + les routes
    
    --}}

@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier mon Header</h1>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="titre">Titre</label>
                <input type="text" id="titre"  name='titre' class="form-control" value='{{!empty($header) ? $header->Titre : ''}}'   >
                </div>

                <label for="img">Photo de profile</label>
                <input type="file" id="img"  name='img' class="form-control" >
                @if(!empty($header) ){
                <img src="{{asset('storage/'.$header->imgHeader_path)}}" alt="" >
                }
                @endif
            </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class='form-control' value='{{!empty($header) ? $header->HeaderDescription : ''}}' ></textarea>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
            </form>
    </div>
@endsection
