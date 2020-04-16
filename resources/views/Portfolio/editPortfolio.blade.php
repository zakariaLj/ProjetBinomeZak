@extends('layout.app')

@section('content')
    @include('templates.nav');

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier le portfolio</h1>
        <form action="{{route('portfolio.update',$portfolio->id)}}" method='post' enctype="multipart/form-data" >
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nom">Nom du portfolio</label>
            <input type="text" id="nom"  name='nom' class="form-control" value='{{$portfolio->nom}}'>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" id="img"  name='img' class="form-control" value='{{$portfolio->img_path}}'>
            </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class='form-control' >
                        {{$portfolio->description}}
                    </textarea>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
            </form>
    </div>
@endsection