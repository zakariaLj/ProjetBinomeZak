@extends('adminlte::page')

@section('content')
      <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'> About Us</h1>
    <a href="{{route('about')}}"> Modifier</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col"> Desciption 1</th>
                <th scope="col">Image</th>
                <th scope="col">Description 2</th>
                
            </tr>  
        </thead>

        <tbody>

    @if (!empty($about) != null)
                <tr>
            <td>{{$about->Titre}}</td>
            <td><img style='width:100px'src="{{asset('storage/'.$about->imgAbout_path)}}" /></td>
            <td>{{$about->description_1}}</td>         
            <td>{{$about->description_2}}</td>
            <td class="d-flex">
          

          

            </td>
        </tr>
   
  
        
    @endif


          
        
        </tbody>
    </table>
</div>
@endsection