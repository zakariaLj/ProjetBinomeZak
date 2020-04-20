@extends('adminlte::page')

@section('content')
        <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'> Header</h1>
    <a href="{{route('header.edit')}}"> Modifier</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col"> Logo</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                
            </tr>  
        </thead>

        <tbody>

    @if (!empty($header) != null)
                <tr>
            <td>{{$header->Titre}}</td>
            <td><img style='width:100px'src="{{asset('storage/'.$header->ImgHeader_path)}}" /></td>
            <td><img style='width:100px'src="{{asset('storage/'.$header->FondImg_path)}}" /></td>

            <td>{{$header->HeaderDescription}}</td>
            <td class="d-flex">
          

          

            </td>
        </tr>
   
  
        
    @endif


          
        
        </tbody>
    </table>
</div>
@endsection