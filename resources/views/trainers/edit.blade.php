@extends('layouts.app')

@section('title', 'Trainers Editar')

@section('content')
    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true])!!}
        
        @include('trainers.form') 

        {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}

    {!!Form::close()!!}

    {{-- <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        INCLUDE
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form> --}}
@endsection   