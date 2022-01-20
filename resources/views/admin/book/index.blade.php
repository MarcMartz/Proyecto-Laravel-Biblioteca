@extends('adminlte::page')

@section('title', 'Libros')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')
    <p>Bienvenido a libros</p>

    <a href="{{route('book.create')}}" class="btn btn-primary">Nuevo libro</a>

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>isbn</th>
                <th>Editorial</th>
                <th>Año</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->year}}</td>
                    <td>{{$book->description}}</td>
                    <td>
                        <img src="{{$book->image}}" alt="" width="100">
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    


    



    

    

    {{$books->links()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="[{{asset('css/app.css')}}]">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop