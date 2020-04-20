@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Créer mes Services</h1>

        @if (count($services)<6)
        <a href="{{route('service.create')}}">Ajouter</a>    
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Icone</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($services as $service)
                <tr>
                <td>{{$service->titre}}</td>    
                <td><i class="{{$service->icone}}"></i></td>
                <td>{{$service->description}}</td>
                <td>
                <a href="{{route('service.edit',$service->id)}}">
                        <button class="btn btn-primary">éditer</button>
                    </a>
                    <form action="{{route('service.destroy', $service->id)}}" method="post">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger">supprimer</button>
                    </form>
                </td>
                </tr> 
            @endforeach
            </tbody>    
        </table>

    @endsection    