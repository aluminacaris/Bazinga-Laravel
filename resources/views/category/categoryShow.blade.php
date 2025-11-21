@extends('layout')
@section('content')
@if(session()->has('message'))
    {{session()->get('message')}}
@endif
<div class="container">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">

                <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">Categorias</a></li>
                <li class="nav-item"><a href="{{route('category.create')}}" class="nav-link">Criar categorias</a></li>
                
            </ul>
        </header>
    </div>
<form action="{{route('category.destroy', $category->id)}}" method="POST">
@csrf
@method('DELETE')
    <legend>Mostrar Categoria</legend>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Nome</label>
        <input type="text" id="disableTextInput" name="name" class="form-control" placeholder="{{$category->name}}">
    </div>
     <div class="mb-3">
        <label for="disableTextInput" class="form-label">Descrição</label>
        <input type="text" id="disableTextInput" name="description" class="form-control" placeholder="{{$category->description}}">
    </div>
    <button type="submit" class="btn btn-danger">Excluir</button>
   
    </form>
    @endsection