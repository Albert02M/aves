<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 ">
  <div class="container px-5">
      <a class="navbar-brand" href="{{url ('/dashboard')}}">
          <span class="fw-bolder text-primary">Aves</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
              <li class="nav-item"><a class="nav-link" href="{{url ('aves')}}">Registros</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url ('aves/create')}}">Agregar </a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Nuevo Usuario</a></li>
              <li class="nav-item"><form method="POST" action="{{ route('logout') }}">
                @csrf
      
                <a class="nav-link" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Cerrar sesión') }} de {{ Auth::user()->name }}
                </a>
            </form></li>
              
          </ul>
      </div>
  </div>
</nav>