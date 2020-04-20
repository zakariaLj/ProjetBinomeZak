@extends('adminlte::page')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'> Ajout d'un employé dans la team</h1>
        <form action="{{route("Team.store")}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New membre de la team</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nom">Nom et prenom de l'employé</label>
                    <input type="text" class="form-control" id="nom" name ='nom' placeholder="Enter name">
                  </div>


                  {{-- //statut de l'employé --}}
                  <div class="form-group">
                    <label for="description">Status de l'employé</label>
                    <input type="text" class="form-control" id="description" name='description' placeholder="exemple CEO">
                  </div>




                    {{-- // Photo de Profil --}}
                  <div class="form-group">
                    <label for="img"> Photo de profil</label>
                    <div>
                      <input type="file" name="img" id="img">
                    </div>
                  </div>



                    {{-- // Icone et url --}}
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-twitter"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien'>
                </div>


                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-facebook"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien'>
                </div>

               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-google-plus"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien'>
                </div>

               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text "><i class="fab fa-linkedin"></i></span>
                  </div>
                  <input type="url" class="form-control w-10" placeholder="url" name='lien' id='lien'>
                </div>
                


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>           

                          




        </form>
    </div>
@endsection