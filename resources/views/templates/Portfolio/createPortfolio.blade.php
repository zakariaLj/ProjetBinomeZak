@extends('adminlte::page')

@section('content')

<div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'> Ajout d'un portfolio</h1>
        <form action="{{route("portfolio.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom du portfolio</label>
                <input type="text" id="nom"  name='nom' class="form-control">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" id="img"  name='img' class="form-control"></div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class='form-control'></textarea>
                    <button type="submit" class="d-block mx-auto btn btn-primary">Ajouter</button>
                </form>
            </div>
            @endsection