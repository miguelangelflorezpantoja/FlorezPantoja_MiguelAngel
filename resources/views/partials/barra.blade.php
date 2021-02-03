<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark special-color-dark">
<img src="">
  <a class="navbar-brand" href="{{url('/')}}">
  
inicio</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
              libros
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{url('/libros')}}">listado </a>
            <a class="dropdown-item" href="{{url('/estudiantes/registro')}}">Registrar</a>
           
          </div>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
              Carreras
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{url('/carreras')}}">listado </a>
            <a class="dropdown-item" href="{{url('/carreras/registro')}}">Registrar</a>
            
          </div>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
              Profesores
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{url('/profesores')}}">listado </a>
            <a class="dropdown-item" href="{{url('/profesores/registro')}}">Registrar</a>
            
          </div>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('')}}">Nosotros</a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->