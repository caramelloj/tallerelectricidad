@extends('layouts.app')

@section('content')

<div class="container py-4 text-center">
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('search.customer') }}">
                @csrf
                <div class="col-form-group">

                    <input type="text" class="form-control" placeholder="Default input" name="customerName" id="inputDefault">
                  </div>
                <div class="col-form-group">
                    <input type="submit" class="btn btn-primary" value="Buscar">

                </div>
            </form>
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
            <th scope="col">Agregar vehículo</th>
            <th scope="col">Eliminar cliente</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->cuit_cuil }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->address }}</td>
                <td><a href="{{ route('vehiculos.show',  $customer->id) }}"><button class="btn btn-primary"><i class="fas fa-car fa-2x"></button></i></a></td>
                <td><a href="{{ route('delete.customer',  $customer->id) }}"><button class="btn btn-primary"><i class="fas fa-trash-alt fa-2x"></button></i></a></td>

            </tr>
            @empty
            <h1>No hay registros para mostrar</h1>
            @endforelse
        </tbody>
      </table>

</div>



@endsection
