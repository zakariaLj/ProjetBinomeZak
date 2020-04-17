@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'> Portfolio</h1>
    <a href="{{route('Portfolio.create')}}">Ajouter</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                
            </tr>  
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <td>{{$portfolio->Name}}</td>
                    <td><img style='width:100px'src="{{asset('storage/'.$portfolio->ImgPortfolio_path)}}" /></td>
                    <td>{{$portfolio->DescriptionPortfolio}}</td>
                    <td>
                    <a href="{{route('Portfolio.edit', $portfolio->id)}}"><button class="btn btn-primary"> Edit</button></a> 
                    <form action="{{route('Portfolio.destroy', $portfolio->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"> Delet</button>    
                    
                    </form>

                    </td>
                </tr>

            @endforeach
            
        </tbody>
    </table>
</div>
@endsection