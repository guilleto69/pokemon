@extends('layouts.app')

@section('title', 'Trainesr')

@section('content')
    <img style="height: 200px; width:200px; background-color: #EFEFEF; margin: 20px;" 
    src="/images/{{$trainer->avatar}}" 
    class="card-img-top rounded-circle mx-auto d-block" 
    alt="...">

    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p>{{$trainer->descripcion}}</p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    </div>
    



    
@endsection 