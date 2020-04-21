@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Créer mes Testimonials</h1>

        @if (count($testimonials)<2)
        <a href="{{route('testimonial.create')}}">Ajouter</a>    
        @endif

        {{-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">Image</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Action</th>
                </tr>
            </thead> --}}
            <div class="row mr-2">
            @foreach ($testimonials as $testimonial)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('storage/'.$testimonial->img_path)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$testimonial->nom}}</h5>
                  <p class="card-text">{{$testimonial->commentaire}}</p>
                  <p>
                  <a href="{{route('testimonial.edit',$testimonial->id)}}" class="btn btn-primary">éditer</a>
                  <form action="{{route('testimonial.destroy', $testimonial->id)}}" method="post">
                    @csrf
                    @method('delete')
                <button class="btn btn-danger ">supprimer</button>
                </p>
                </div>
              </div>
                {{-- <tr>
                <td>{{$testimonial->nom}}</td>    
                <td>{{$testimonial->fonction}}</td>
                <td><img src="{{asset('storage/'.$testimonial->img_path)}}" alt="" st></td>
                <td>{{$testimonial->commentaire}}</td>
                <td>
                <a href="{{route('testimonial.edit',$testimonial->id)}}">
                        <button class="btn btn-primary">éditer</button>
                    </a>
                    <form action="{{route('testimonial.destroy', $testimonial->id)}}" method="post">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger">supprimer</button>
                    </form>
                </td>
                </tr>  --}}
            @endforeach
        </div>
        </table>
    </div>

    @endsection 

    