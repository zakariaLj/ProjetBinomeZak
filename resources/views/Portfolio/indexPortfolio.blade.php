@extends('adminlte::page')

@section('content')

    {{-- <div class="container mt-5 pt-5">
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
 
    </table>
</div> --}}
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Tableau des Portfolios</h3>
                <div class="text-center">
                    <a href="{{route('Portfolio.create')}}"><i class="fas fa-3x fa-folder-plus"></i></a>

                </div>
                <div class="card-tools">
                    <form action="/search" method="get">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="search" name="search" class="form-control float-right" placeholder="Search">                
                    </form>

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Image</th>
                      <th>Description</th>

                    </tr>
                  </thead>
       <tbody>

         @foreach($portfolios as $portfolio)
                        
                    <td>{{$portfolio->Name}}</td>
                    <td><img style='width:100px'src="{{asset('storage/'.$portfolio->ImgPortfolio_path)}}" /></td>
                    <td>{{$portfolio->DescriptionPortfolio}}</td>
                    <td class="d-flex">
                    <a href="{{route('Portfolio.edit', $portfolio->id)}}"><button class="btn btn-primary"> Edit</button></a> 
                    <form action="{{route('Portfolio.destroy', $portfolio->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"> Delet</button>    
                    
                    </form>
                    </td>

                   </tr>



        @endforeach
            {{-- @foreach ($portfolios as $portfolio)
                <tr>
                    <td>{{$portfolio->Name}}</td>
                    <td><img style='width:100px'src="{{asset('storage/'.$portfolio->ImgPortfolio_path)}}" /></td>
                    <td>{{$portfolio->DescriptionPortfolio}}</td>
                    <td class="d-flex">
                    <a href="{{route('Portfolio.edit', $portfolio->id)}}"><button class="btn btn-primary"> Edit</button></a> 
                    <form action="{{route('Portfolio.destroy', $portfolio->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"> Delet</button>    
                    
                    </form>

                    </td>
                </tr>

            @endforeach --}}
            
        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>




@endsection