@extends('adminlte::page')


@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier mes Services</h1>
        <form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="form-group">
                    <label for="titre">Titre</label>
                <input type="string" id="titre"  name='titre' class="form-control" value='{{!empty($service) ? $service->titre : ''}}'   >
                </div>

                <div class="form-group">
                    <label for="icone">Icone</label>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" value="fas fa-cookie">
                        <label class="form-check-label"></i></label>
                        <i class="fas fa-cookie"></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" value="fas fa-cat">
                        <label class="form-check-label"></label>
                        <i class="fas fa-cat"></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" value="fas fa-heart">
                        <label class="form-check-label"></label>
                        <i class="fas fa-heart"></i>
                      </div>
                </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class='form-control' >
                            {{!empty($service) ? $service->description : ''}}
                        </textarea>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
                </form>
        </div>
    @endsection
