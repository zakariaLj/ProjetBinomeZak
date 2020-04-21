@extends('adminlte::page')

@section('content')
    
<div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Lien actuel</h1>
        @if(!empty($subscribe->link) )
            <a class="subscribe-btn" href="{{$subscribe->link}}">{{$subscribe->link}}</a>
            
            @endif
        <a href="{{route('subscribe.edit',$subscribe->id)}}">
            <button class="btn btn-primary">modifier le lien</button>
        </a>
</div>

    @endsection
    
    {{--!empty($subscribe) ? $subscribe->link : ''}} --}}