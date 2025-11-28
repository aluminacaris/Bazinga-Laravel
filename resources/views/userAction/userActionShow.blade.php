@extends('layout')

@section('content')
<div class="container">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="{{ route('useraction.index') }}" class="nav-link">Ações dos usuários</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('useraction.create') }}" class="nav-link">Criar nova ação de usuário</a>
                </li>
            </ul>
        </header>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mb-4">Detalhes da ação do usuário #{{ $userAction->id }}</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">
                {{ $userAction->user->name ?? 'Usuário não encontrado' }}
            </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
                {{ $userAction->action->title ?? 'Ação não encontrada' }}
            </h6>

            <p class="card-text mb-1">
                <strong>Categoria:</strong>
                {{ $userAction->action->categories->name ?? 'Categoria não encontrada' }}
            </p>

            <p class="card-text mb-1">
                <strong>Pontuação por ação:</strong>
                {{ $userAction->action->points ?? '-' }}
            </p>

            <p class="card-text mb-1">
                <strong>Quantidade:</strong>
                {{ $userAction->quantity }}
            </p>

            <p class="card-text mb-1">
                <strong>Total de pontos:</strong>
                {{ ($userAction->action->points ?? 0) * $userAction->quantity }}
            </p>

            <p class="card-text mb-1">
                <strong>Data:</strong>
                {{ \Carbon\Carbon::parse($userAction->date)->format('d/m/Y') }}
            </p>

            <p class="card-text">
                <strong>Criado em:</strong>
                {{ optional($userAction->created_at)->format('d/m/Y H:i') }}
            </p>
        </div>
    </div>

    <div class="d-flex gap-2">
        <a href="{{ route('useraction.edit', $userAction->id) }}" class="btn btn-primary">
            Editar
        </a>

        <form action="{{ route('useraction.destroy', $userAction->id) }}" method="POST"
              onsubmit="return confirm('Tem certeza que deseja excluir este registro?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Excluir
            </button>
        </form>

        <a href="{{ route('useraction.index') }}" class="btn btn-secondary ms-auto">
            Voltar para lista
        </a>
    </div>
</div>
@endsection


