@if('menu', $category)
<div class="container">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">Ações do usuários</a></li>
                <li class="nav-item"><a href="{{route('category.create')}}"class="nav-link active"class="nav-link">Criar novas ações de usuários</a></li>  
        </header>
    </div>
