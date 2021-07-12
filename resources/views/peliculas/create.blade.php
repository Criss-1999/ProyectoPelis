@extends('modelo.plantilla')

@section('title', 'Página de Crear Películas')

@section('content')
    <h1>Bienvenidos a la página para crear películas</h1>
    <h6>Nombre de la Pelicula:</h6><BR>
    <INPUT type=text name=nombre size=30><BR>
    <h6>Descripcion de la Pelicula:</h6>
    <BR>
    <TEXTAREA name=comentario rows=5 cols=40 wrap=virtual>
    </TEXTAREA><BR>
    <h6>Categoria:</h6><BR>
    <INPUT type=text name=nombre size=30><BR>
    <INPUT type=submit value="Enviar" >
@endsection