@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')

    <p>Bienvenido a editar categoria </p>

    <form action="{{route('category.update', $category->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
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