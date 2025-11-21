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
<form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
    <legend>Editar Categoria</legend>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Nome</label>
        <input type="text" id="disableTextInput" name="name" class="form-control" value="{{$category->name}}">
    </div>
     <div class="mb-3">
        <label for="disableTextInput" class="form-label">Descrição</label>
        <input type="text" id="disableTextInput" name="description" class="form-control" value="{{$category->description}}">
    </div>
     <div class="mb-3">
        <label for="disableTextInput" class="form-label">Imagem da categoria</label>
        <input type="file" name="image" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
   
    </form>
    @endsection