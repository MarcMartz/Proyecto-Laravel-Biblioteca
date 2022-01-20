@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')
    <p>Bienvenido a autores</p>

    <a href="{{route('author.create')}}" class="btn btn-primary">Nuevo autor</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Biografia</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{$author->id}}</td>
                    <td>{{$author->name}}</td>
                    <td>{{$author->lastname}}</td>
                    <td>{{$author->biography}}</td>
                    <td>
                        <img src="{{$author->image}}" alt="" width="100">
                    <td>
                        <a href="{{route('author.edit', $author->id)}}" class="btn btn-warning">Editar</a>
                        <form action="{{route('author.destroy', $author->id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    

    {{$authors->links()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="[{{asset('css/app.css')}}]">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop