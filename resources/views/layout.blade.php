<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <main class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;"> <a href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg
                class="bi pe-none me-2" width="40" height="32" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg> <span class="fs-4">Menu Navegação</span> </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"> <a href="/"class="nav-link text-white" > 
                    Home
                </a> </li>
            <li> <a href="{{route('category.index')}}" class="nav-link text-white"> 
                   Categorias
                </a> </li>
            <li> <a href="{{route('action.index')}}" class="nav-link text-white"> 
                    Ações
                </a> </li>
            <li> <a href="#" class="nav-link text-white"> 
                    Premios
                </a> </li>
        </ul>
    </div>
    
    @yield('content')

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center"> <a href="/"
                    class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> <svg
                        class="bi" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg> </a> <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span> </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Instagram"><svg
                            class="bi" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Facebook"><svg
                            class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>
    </main>
</body>

</html>
