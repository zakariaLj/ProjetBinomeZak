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
                <td>{{$message->email}}></i></td>
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>
                </tr> 
            @endforeach
            </tbody>    
        </table>

    @endsection    