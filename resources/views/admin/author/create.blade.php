@extends('adminlte::page')

@section('title', 'Insertar autor')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')

    <p>Bienvenido a insertar autor </p>

    <form action="{{route('author.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="last_name">Apellido</label>
            @if ($errors->has('last_name'))
                <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
            @endif
            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="biography">Biografia</label>
            @if ($errors->has('biography'))
                <div class="alert alert-danger">{{ $errors->first('biography') }}</div>
            @endif
            <textarea name="biography" class="form-control" placeholder="Biography"></textarea>
            
        </div>

        <div class="form-group">
            <label for="image">Imagen</label>
            @if ($errors->has('image'))
                <div class="alert alert-danger">{{ $errors->first('image') }}</div>

            @endif
            <input type="file" name="image" class="form-control" placeholder="Image" accept="image/*">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop