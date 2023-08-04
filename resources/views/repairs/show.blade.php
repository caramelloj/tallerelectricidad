@extends('layouts.app')

@section('title', 'Listado de reparaciones')

@section('content')
    <div class="container py-4">
        <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('search.repair') }}">
                    @csrf
                    <div class="col-form-group">
                        <input type="text" class="form-control" placeholder="Escriba la patente para buscar..." name="carDomain" id="inputDefault">
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
                <th scope="col">ID</th>
                <th scope="col">Patente</th>
                <th scope="col">Observaciones</th>

              </tr>
            </thead>
            <tbody>
                @forelse ($repairs as $repair)
                <tr>
                    <td>{{ $repair->id }}</td>
                    <td>{{ $repair->domain }}</td>
                    <td>{{ $repair->observations }}</td>
                @empty
                <h1>No hay registros para mostrar</h1>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection
