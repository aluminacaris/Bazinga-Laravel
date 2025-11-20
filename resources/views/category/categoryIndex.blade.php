@extends('layout')
@section('content')
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach($categories as $cat)
    <div class="col">
      <div class="card shadow-sm"> <img src= "storage/app/public/image/categories/download.png"></img>
     <div class="card-body">
          <p class="card-text">{{$cat->name}}</p>
          <p class="card-text">{{$cat->descritpion}}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
          </div>
        </div>
      </div>
    </div>
      @endforeach
    </div>
  </div>







<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Editar</th>
      <th scope="col">Mostrar</th>
    </tr>
  <tbody>
    @foreach($categories as $cat)
    <tr>
      <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->name}}</td>
      <td>{{$cat->description}}</td>
      <td><a href="{{route('category.edit', $cat->id)}}"><button type="button" class="btn btn-success" hres>Editar</button></td>
      <td><a href="{{route('category.show', $cat->id)}}"><button type="button" class="btn btn-success" hres>Mostrar</button></td>
    </tr>
    @endforeach
  </tbody>
  </thead>
</table>
@endsection