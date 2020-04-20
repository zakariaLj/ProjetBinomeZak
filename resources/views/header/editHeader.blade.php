
{{-- IMPORTANT
    
    cree les controler la table et model + les routes
    
    --}}

@extends('adminlte::page')

@section('content')
     <div class="card card-primary container">
              <div class="card-header">
                  <h1 class='text-center mt-3 pt-3'>Modifier mon Header</h1>
              </div>
            <form action="{{route('header.update')}}" method="post" enctype="multipart/form-data">
               @csrf 
              <form role="form">
                <div class="form-group">
                    <label for="titre">Titre</label>
                     <input type="text" id="titre"  name='titre' class="form-control" value='{{!empty($header) ? $header->Titre : ''}}'/>
                </div>  

                <label for="img">Logo</label>
                <input type="file" id="img"  name='img' class="form-control" >
                @if(!empty($header) )
                <img src="{{asset('storage/'.$header->imgHeader_path)}}" style="width:20%;" alt="" >
                @endif

                <div>
                    <label for="imgFond">Image de fond</label>
                    <input type="file" id="imgFond"  name='imgFond' class="form-control" >
                    @if(!empty($header) )
                    <img src="{{asset('storage/'.$header->FondImg_path)}}" style="width:20%;" alt="" >
                    @endif
                </div>    
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class='form-control' >{{!empty($header) ? $header->HeaderDescription : ''}}</textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
            </div>
              </form>
            </div>
        </form>
@endsection
