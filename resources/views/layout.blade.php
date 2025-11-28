<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <title>bisnaga</title>
</head>

<body>
    <main class="app-wrapper">
        <header class="top-navbar">
            <div class="brand">Bazinga</div>
            <nav class="navbar-links">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('category.index') }}" class="nav-link {{ request()->is('category*') ? 'active' : '' }}">Categorias</a>
                <a href="{{ route('action.index') }}" class="nav-link {{ request()->is('action*') ? 'active' : '' }}">Ações</a>
                <a href="{{ route('useraction.index') }}" class="nav-link {{ request()->is('useraction*') ? 'active' : '' }}">Ações de usuários</a>
            </nav>
        </header>

        <section class="content-wrapper">
            <div class="content-card">
                @yield('content')
            </div>

            <footer class="footer mt-5">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <span>© 2025 Bazinga</span>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#" aria-label="Instagram">Instagram</a>
                        <a href="#" aria-label="Facebook">Facebook</a>
                    </div>
                </div>
            </footer>
        </section>
    </main>
</body>

</html>
