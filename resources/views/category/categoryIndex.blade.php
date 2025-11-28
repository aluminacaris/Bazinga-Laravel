@extends('layout')
@section('content')
<div class="container">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">  
                <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link active" class="nav-link">Categorias</a></li>
                <li class="nav-item"><a href="{{route('category.create')}}" class="nav-link">Criar categorias</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($categories as $cat)
                @php
                    $hasImage = !empty($cat->image) && $cat->image !== 'NA';
                    $imagePath = $hasImage
                        ? asset('storage/' . $cat->image)
                        : asset('images/category-placeholder.svg');
                @endphp
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="{{ $imagePath }}"
                            alt="Imagem da categoria {{ $cat->name }}" width="150">
                        <div class="card-body">
                            <p class="card-text">{{ $cat->name }}</p>
                            <p class="card-text">{{ $cat->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('category.show', $cat->id) }}"><button type="button"
                                            class="btn btn-sm btn-outline-secondary">Mostrar</button></a>
                                    <a href="{{ route('category.edit', $cat->id) }}"><button type="button"
                                            class="btn btn-sm btn-outline-secondary">Editar</button></a>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>







    {{-- <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Editar</th>
      <th scope="col">Mostrar</th>
    </tr>
  <tbody>
    @foreach ($categories as $cat)
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
</table> --}}
@endsection
