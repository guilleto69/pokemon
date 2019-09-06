@extends('layouts.app')

@section('title', 'Trainers Crear')

@section('content')
    @include('common.errors')
    {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true])!!}
        
        @include('trainers.form') 
        {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}

    {!!Form::close()!!}

    {{-- <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        INCLUDE
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form> --}}
@endsection   
