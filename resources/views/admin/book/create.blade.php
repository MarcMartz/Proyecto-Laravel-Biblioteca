@extends('adminlte::page')

@section('title', 'Insertar libros')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')

    <p>Bienvenido a insertar libros </p>

    <form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            @if ($errors->has('isbn'))
                <div class="alert alert-danger">{{ $errors->first('isbn') }}</div>
            @endif
            <input type="text" name="isbn" class="form-control" placeholder="ISBN">
        </div>
        <div class="form-group">
            <label for="publisher">Editorial</label>
            @if ($errors->has('publisher'))
                <div class="alert alert-danger">{{ $errors->first('publisher') }}</div>
            @endif
            <input type="text" name="publisher" class="form-control" placeholder="Editorial">
        </div>
        <div class="form-group">
            <label for="year">Año</label>
            @if ($errors->has('year'))
                <div class="alert alert-danger">{{ $errors->first('year') }}</div>
            @endif
            <input type="text" name="year" class="form-control" placeholder="Año">
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            @if ($errors->has('description'))
                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
            @endif
            <textarea name="description" class="form-control" placeholder="Descripción"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Imagen</label>
            @if ($errors->has('image'))
                <div class="alert alert-danger">{{ $errors->first('image') }}</div>

            @endif
            <input type="file" name="image" class="form-control" placeholder="Image" accept="image/*">
        </div>

        <div class="form-group">
            <label for="author_id">Autor</label>
            @if ($errors->has('author_id'))
                <div class="alert alert-danger">{{ $errors->first('author_id') }}</div>
            @endif
            <select name="author_id" class="form-control">
                @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            @if ($errors->has('category_id'))
                <div class="alert alert-danger">{{ $errors->first('category_id') }}</div>
            @endif
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

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