@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier le portfolio</h1>
        <form action="{{route('Portfolio.update',$portfolio->id)}}" method='post' enctype="multipart/form-data" >
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nom">Nom du portfolio</label>
            <input type="text" id="nom"  name='nom' class="form-control" value='{{$portfolio->Name}}'>
            </div>
            <div class="form-group">
                <label for="img">Image</label>

                <img src="{{asset('storage/'.$portfolio->ImgPortfolio_path)}}" alt="" srcset="">
                @if ($portfolio !== null)
                    <input type="file" id="img"  name='img' class="form-control" value="{{$portfolio->ImgPortfolio_path}}">
                @else
                    <input type="file" id="img"  name='img' class="form-control" value="">                    
                @endif

            </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class='form-control' >
                        {{$portfolio->DescriptionPortfolio}}
                    </textarea>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
                </div>
            </form>
    </div>
@endsection