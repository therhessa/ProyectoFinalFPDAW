@if (Auth::user())
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
   @endif
  </div>
</li>    

<div class="container-fluid" style="height: 60px; background-color:#4531d8; color:white; font-size: 40px; padding: 0 10px 0 10px;">
    Administrador
</div>
<div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
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
 
 
