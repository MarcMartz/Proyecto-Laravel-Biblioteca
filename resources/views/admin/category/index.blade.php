@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')
    <p>Bienvenido a la categoria</p>

    <a href="{{route('category.create')}}" class="btn btn-primary">Nueva Categoria</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning">Editar</a>
                      
                        <form action="{{route('category.destroy', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    

    {{$categories->links()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="[{{asset('css/app.css')}}]">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop