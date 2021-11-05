<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.name', 'Fruteria') }}
        </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('register') }}</a>
                </li>
            @endif
        @else

         @if (Auth::user()->hasRole('admin'))

        <div class="container-fluid" style="height: 60px; background-color:#4531d8; color:white; font-size: 40px; padding: 0 10px 0 10px;">
            Administrador
        </div>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="administrador" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Acciones Categoria
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Alta</a></li>
              <li><a class="dropdown-item" href="#">Listar</a></li>
              <li><a class="dropdown-item" href="#">Disponibilidad</a></li>
              <li><a class="dropdown-item" href="#">Cambiar estado</a></li>
            </ul>
          </div>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Acciones Productos
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Alta</a></li>
              <li><a class="dropdown-item" href="#">Listar</a></li>
              <li><a class="dropdown-item" href="#">Cambiar Estado</a></li>
              <li><a class="dropdown-item" href="#">Visibilidad</a></li>
            </ul>
          </div>

        @endif


         <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Inicio</a>
        </li>


        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('user.profile', ['id' => Auth::user()->id]) }}">
                    Mi Perfil
                </a>

                <a class="dropdown-item" href="{{ route('config') }}">
                    Configuracion
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest

      </ul>

    </div>
  </div>
</nav>
