@extends('adminlte::page')

@section('content')



  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Header</h3>
                <div class="text-center">
                    <a href="{{route('header.edit')}}"><i class="fas fa-3x fa-folder-plus"></i></a>

                </div>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">


                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
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
                                <td><img style='width:100px'src="{{asset('storage/'.$header->imgHeader_path)}}" /></td>
                                <td><img style='width:100px'src="{{asset('storage/'.$header->FondImg_path)}}" /></td>
                                <td>{{$header->HeaderDescription}}</td>

                            </tr>
                        @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection