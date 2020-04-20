@extends('adminlte::page')
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier le membre de la team</h3>
              </div>
              <form action="{{route("Team.update",$team->id)}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('put')


              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 
                 {{-- Nom de l'employé --}}
                  <div class="form-group">
                    <label for="nom">Nom de l'employe</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter nom" value="{{$team->Name}}">
                  </div>
               
               {{-- Status de l'enployé --}}
                  <div class="form-group">
                  <label for="description">Minimal</label>
                <input class="form-control" type="text" name="description" placeholder="entre statuts" value="{{$team->Descriptionteam}}"/>
                </div>


              {{-- photo de l'employé --}}
                <div class="form-group">
                  <label for="img">Photo de l'employe</label>
                  <div>
                    <img style=" width:20%;"src="{{asset('storage/'.$team->Imgteam_path)}}" alt="" srcset="">
                      @if ($team !== null)
                          <input type="file" id="img"  name='img' class="form-control" value="{{$team->Imgteam_path}}">
                      @else
                          <input type="file" id="img"  name='img' class="form-control" value="">                    
                      @endif               

                  </div>
               </div>

               
                    {{-- // Icone et url --}}
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-twitter"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien' value='{{$team->url}}'>
                </div>


                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-facebook"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien' value='{{$team->url}}'>
                </div>

               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-google-plus"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien' value='{{$team->url}}'>
                </div>

               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-linkedin"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien' value='{{$team->url}}'>
                </div>
                

                 
            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </form>
            </div>               
                


@endsection