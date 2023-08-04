@extends('layouts.app')

@section('title', 'Listado de reparaciones')

@section('content')
    <div class="container py-4">

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
