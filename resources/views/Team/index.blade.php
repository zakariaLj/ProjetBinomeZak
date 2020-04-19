@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'> Team</h1>
                            
                    @if (count($teams)< 4)
                
                      <a href="{{route("Team.create")}}">Ajouter</a>
                
                    @endif

    
  
                <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-header">

                                <h3 class="card-title">Gestionnaire des membres de la team</h3>

                                <div class="card-tools">
                                  <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                  </div>
                                </div>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Nom de l'employé</th>
                                      <th>Photo de l'employé</th>
                                      <th>Status</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>

                                    @foreach ($teams as $team)
                                    <tr>
                                      <td>{{$team->id}}</td>
                                      <td>{{$team->Name}}</td>
                                      <td><img style='width:100px'src="{{asset('storage/'.$team->Imgteam_path)}}" /></td>
                                      <td>{{$team->Descriptionteam}}</td>
                                      <td class="d-flex">
                                        <button class="btn btn-primary" type="submit"><a class="text-white"  href ={{route('Team.edit',$team->id)}}>Edit</a> </button>
                                        <form action="{{route('Team.destroy',$team->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                      
                                      </td>
                                    </tr>
                                    
                                    @endforeach
                                  
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                        </div>
            
            
        </tbody>
    </table>
</div>
@endsection



