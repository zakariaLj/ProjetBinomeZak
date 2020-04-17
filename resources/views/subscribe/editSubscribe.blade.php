@extends('adminlte::page')

@section('content')
    
<div class="container mt-5 pt-5">
        <h1 class='text-center mt-3 pt-3'>Modifier mon Lien</h1>
        <form action="{{route('subscribe.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="lien">Lien</label>
                <input type="text" id="lien"  name='lien' class="form-control" value="{{!empty($subscribe) ? $subscribe->link : ''}}"  >
            </div>
        </form>
</div>

@endsection

{{--!empty($subscribe) ? $subscribe->link : ''}} --}}
