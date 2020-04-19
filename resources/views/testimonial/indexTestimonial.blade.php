@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Créer mes Testimonials</h1>

        @if (count($testimonials)<2)
        <a href="{{route('testimonial.create')}}">Ajouter</a>    
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">Image</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                <td>{{$testimonial->nom}}</td>    
                <td>{{$testimonial->fonction}}</td>
                <td><img src="{{asset('storage/'.$testimonial->img_path)}}" alt="" st></td>
                <td>{{$testimonial->commentaire}}</td>
                <td>
                <a href="{{route('testimonial.edit',$testimonial->id)}}">
                        <button class="btn btn-primary">éditer</button>
                    </a>
                    <button class="btn btn-danger">supprimer</button>
                </td>
                </tr> 
            @endforeach
            </tbody>    
        </table>

    @endsection 