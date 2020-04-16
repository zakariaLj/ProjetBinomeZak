@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier Section About</h1>
        <form action="" method='post' enctype="multipart/form-data" >
            @csrf
 
                <div class="form-group">
                    <label for="description1">Description 1</label>
                    <textarea name="description1" id="description1" cols="30" rows="10" class='form-control' >
                        
                    </textarea>
                     <div class="form-group">
                    <label for="description2">Description 2</label>
                    <textarea name="description2" id="description2" cols="30" rows="10" class='form-control' >
                       
                    </textarea>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
            </form>
    </div>
@endsection

{{-- {{!empty($about) ? $about->description_1 : ''}}
{{!empty($about) ? $about->description_2 : ''}} --}}
