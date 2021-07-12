@extends('modelo.plantilla')

@section('title', 'Página de Editar Películas')

@section('content')
    <h1>Bienvenidos Editar películas</h1>
    <h6>Nombre de la Pelicula:</h6><BR>
    <INPUT type=text id=nombreEditar name=nombreEditar size=30><BR>
    <h6>Descripcion de la Pelicula:</h6>
    <BR>
    <TEXTAREA id=comentarioEditar name=comentarioEditar rows=5 cols=40 wrap=virtual>
    </TEXTAREA><BR>
    <h6>Categoria:</h6><BR>
    <INPUT type=text id=nombreEditar name=nombreEditar size=30><BR>
    <INPUT type=submit value="Enviar" >
@endsection