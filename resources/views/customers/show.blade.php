@extends('layouts.app')

@section('content')

<div class="container py-4 text-center">
    <div class="container">
        <div class="row">
            <div class="form-group col-md-9">
                <input class="form-control form-control-lg" type="text" placeholder="Escriba el nombre del cliente a buscar..." id="inputLarge">
              </div>
            <div class="form-group col-md-3">
                <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
        </div>
    </div>

<hr>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Cuit/cuil</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->cuit_cuil }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->address }}</td>
            </tr>
            @empty
            <h1>No hay registros para mostrar</h1>
            @endforelse
        </tbody>
      </table>

</div>

@endsection
