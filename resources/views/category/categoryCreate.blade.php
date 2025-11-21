@extends('layout')
@section('content')
@if(session()->has('message'))
    {{session()->get('message')}}
@endif
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">

                <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">Categorias</a></li>
                <li class="nav-item"><a href="{{route('category.create')}}" class="nav-link active" class="nav-link">Criar categorias</a></li>
                
            </ul>
        </header>
    </div>
<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
@csrf
    <legend>Adicionar Categoria</legend>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Nome</label>
        <input type="text" id="disableTextInput" name="name" class="form-control" value="{{old('name')}}">
    </div>
     <div class="mb-3">
        <label for="disableTextInput" class="form-label">Descrição</label>
        <input type="text" id="disableTextInput" name="description" class="form-control" value="{{old('description')}}">
    </div>
      <div class="mb-3">
        <label for="disableTextInput" class="form-label">Imagem da categoria</label>
        <input type="file" name="image" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
   
    </form>
    @endsection