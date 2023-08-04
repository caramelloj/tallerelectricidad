@extends('layouts.app')

@section('title', 'Listado de automoviles')


@section('content')
<div class="container py-4">
    <div class="row">
        <form method="POST" action="{{ route('search.car') }}">
            @csrf
            <div class="col-form-group">
                <input type="text" class="form-control" placeholder="Escriba la patente del vehiculo para buscar..." name="carDomain" id="inputDefault">
              </div>
            <div class="col-form-group">
                <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
        </form>
    </div>
</div>

<hr>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Patente</th>
            <th scope="col">Modelo</th>
            <th scope="col">Año</th>
            <th scope="col">Añadir reparación</th>
            <th scope="col">Eliminar vehículo</th>
            <th scope="col">Editar vehículo</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($cars as $car)
            <tr>
                <td>{{ $car->domain }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td><a href="{{ route('vehiculos.show',  $car->id) }}"><button class="btn btn-primary"><i class="fas fa-car fa-2x"></button></i></a></td>
                <td><a href="{{ route('delete.vehicle',  $car->id) }}"><button class="btn btn-primary"><i class="fas fa-trash-alt fa-2x"></button></i></a></td>
                <td><a href="{{ route('vehiculos.edit',  $car->id) }}"><button class="btn btn-primary"><i class="fas fa-pen-square fa-2x"></button></i></a></td>

            </tr>
            @empty
            <h1>No hay registros para mostrar</h1>
            @endforelse
        </tbody>
      </table>
</div>


</div>



@endsection
