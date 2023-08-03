@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Clientes</div>
                    <div class="card-body">
                      <h4 class="card-title"><a href="{{route('clientes.create')}}">Crear cliente</a></h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Vehículos</div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="{{route('vehiculos.index')}}">Consultar automóviles</a></h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Reparaciones</div>
                    <div class="card-body">
                      <h4 class="card-title">Primary card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>

        </div>
    </div>
@endsection
