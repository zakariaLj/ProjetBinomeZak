@extends('adminlte::page')

@section('content')



        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table About</h3>
                <div class="text-center">
                    <a href="{{route('about')}}"><i class="fas fa-3x fa-folder-plus"></i></a>

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
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col"> Desciption 1</th>
                <th scope="col">Description 2</th>
                    </tr>
                  </thead>
                  <tbody>

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
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection