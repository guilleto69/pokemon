@extends('layouts.app')

@section('title', 'Trainers Editar')

@section('content')
    <form class="form-group" 
            method="POST" 
            action="/trainers/{{$trainer->slug}}" 
            enctype="multipart/form-data">
        @method('PUT')
        @csrf
        
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" 
                name="name" 
                value="{{$trainer->name}}"
                class="form-control">
        </div>

        
        <div class="col-sm">
            <img style="height: 200px; width:200px; background-color: #EFEFEF; margin: 20px;" 
                    src="images/{{$trainer->avatar}}" 
                    class="card-img-top rounded-circle mx-auto d-block" 
                    alt="...">
                
            <label for="">Avatar: </label>
            <input type="file" 
                name="avatar"
                {{-- value="{{$trainer->avatar}}" --}}
            >
               
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <input type="text" 
                name="descripcion" 
                value="{{$trainer->descripcion}}"
                class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection   