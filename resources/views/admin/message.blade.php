@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Tous les Messages</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sujet</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($messages as $message)
                <tr>
                <td>{{$message->nom}}</td>    
                <td>{{$message->email}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>
                
                <td>
                <form action="{{route('message.destroy', '$message->id')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <a href="{{route('message.show','$message->id')}}">Editez vos messages</a>
                    <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
                </td>

                </tr> 
            @endforeach
            
            </tbody>    
        </table>

    @endsection