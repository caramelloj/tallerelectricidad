<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Menú Principal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('vehiculos.index') }}">Vehículos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('reparaciones.index') }}">Reparaciones</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
