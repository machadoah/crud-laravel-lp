<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Crud Simples</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Crud Simples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link {{Route::getCurrentRoute()->getName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::getCurrentRoute()->getName() == 'computadores.list' ? 'active' : ''}}" href="{{route('computadores.list')}}">
                            Computadores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::getCurrentRoute()->getName() == 'computadores.list' ? 'active' : ''}}" href="{{route('produtos.index')}}">
                            Produtos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
