@extends('adminlte::page')

@section('title', 'Editar autor')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')

    <p>Bienvenido a editar autor </p>

    <form action="{{route('author.update', $author->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
            <input type="text" name="name" class="form-control" value="{{$author->name}}">
        </div>
        <div class ="form-group">
            <label for="last_name">Apellido</label>
            @if ($errors->has('last_name'))
                <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
            @endif
            <input type="text" name="last_name" class="form-control" value="{{$author->lastname}}">
        </div>
        <div class="form-group">
            <label for="biography">Biografia</label>
            @if ($errors->has('biography'))
                <div class="alert alert-danger">{{ $errors->first('biography') }}</div>
            @endif
            <textarea name="biography" class="form-control">{{$author->biography}}</textarea>
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