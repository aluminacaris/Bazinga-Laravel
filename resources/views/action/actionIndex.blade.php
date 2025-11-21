@extends('layout')
@section('content')
<div class="container">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('action.index')}}" class="nav-link active" class="nav-link">Ações</a></li>
                <li class="nav-item"><a href="{{route('action.create')}}" class="nav-link">Criar novas ações</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Pontos</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Mostrar</th>
                    </tr>
                <tbody>
                    @foreach ($actions as $at)
                        <tr>
                            <th scope="row">{{ $at->id }}</th>
                            <td>{{ $at->title }}</td>
                            <td>{{ $at->description }}</td>
                            <td>{{ $at->points }}</td>
                            <td>{{ $at->categories->name }}</td>
                            <td><a href="{{ route('action.edit', $at->id) }}"><button type="button" class="btn btn-success"
                                        hres>Editar</button></td>
                            <td><a href="{{ route('action.show', $at->id) }}"><button type="button" class="btn btn-success"
                                        hres>Mostrar</button></td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
   
  @endsection
     </div>
    </div>