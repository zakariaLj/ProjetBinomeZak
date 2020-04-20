@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier mes Testimonials</h1>
        <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nom">Nom</label>
                <input type="string" id="nom"  name='nom' class="form-control">
                </div>

                <div class="form-group">
                    <label for="fonction">Fonction</label>
                <input type="string" id="fonction"  name='fonction' class="form-control">
                </div>

                <div class="form-group">
                    <label for="img_path">Image</label>
                    <input type="file" id="img_path"  name='img_path' class="form-control">
                        
                </div>
                    <div class="form-group">
                        <label for="commentaire">Commentaire</label>
                        <textarea name="commentaire" id="commentaire" cols="30" rows="10" class='form-control' >
                            
                        </textarea>
                        <button type="submit" class="d-block mx-auto btn btn-primary">Modifier</button>
                </form>
        </div>
    @endsection