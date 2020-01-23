




<nav id="nav-menu-container" >
  <ul class="nav-menu">
    <li class="menu-active"><a href="{{ route('inicio') }}">Inicio</a></li>

    <li><a href="{{ route('contacto') }}">Contacto</a></li>
    @guest
    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
    <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a></li>
      @else
        <li><a href="{{ route('propietarios') }}">Propietarios</a></li>
        <li><a href="{{ route('formPropietario') }}">Crear Propietario</a></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a><li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endguest
    <!-- <li class="menu-has-children"><a href="">Drop Down</a>
      <ul>
        <li><a href="#">Drop Down 1</a></li>
        <li><a href="#">Drop Down 3</a></li>
        <li><a href="#">Drop Down 4</a></li>
        <li><a href="#">Drop Down 5</a></li>
      </ul>
    </li> -->

  </ul>
</nav><!-- #nav-menu-container -->
