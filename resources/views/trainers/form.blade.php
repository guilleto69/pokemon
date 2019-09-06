<div class="form-group">
        {!! Form::label('name', 'Nombre: ')!!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
            {!! Form::label('slug', 'Slug: ')!!}
            {!! Form::text('slug', null, ['class'=>'form-control'])!!}
        </div>

    <div class="form-group">
        {!! Form::label('name', 'Avatar: ')!!}
        {!! Form::file('avatar') !!}
    </div>

    <div class="form-group">
            {!! Form::label('description', 'Descripcion: ')!!}
            {!! Form::text('description', null, ['class'=>'form-control'])!!}
    </div>

    {{-- @csrf
        <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" >
        </div> --}}