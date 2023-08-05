@extends('layouts.app')

@section('title', 'Añadir reparación')

@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header h4">
                Añadir reparación
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('reparaciones.store') }}">
                    @csrf
                    <div class="form-group">
                        <fieldset>
                          <label class="form-label mt-8" for="readOnlyInput">ID del vehículo</label>
                          <input class="form-control form-control-sm" id="readOnlyInput" type="text" placeholder="{{ $car->id }}" value="{{ $car->id }}" name="carId" readonly="">
                        </fieldset>
                      </div>
                    <div class="form-group">
                        <fieldset>
                          <label class="form-label mt-8" for="readOnlyInput">Patente del vehículo</label>
                          <input class="form-control form-control-sm" id="readOnlyInput" type="text" placeholder="{{ $car->domain }}" value="{{ $car->domain }}" name="carDomain" readonly="">
                        </fieldset>
                      </div>
                      <div class="form-group">
                        <fieldset>
                          <label class="form-label mt-8" for="readOnlyInput">Modelo del vehículo</label>
                          <input class="form-control form-control-sm" id="readOnlyInput" type="text" name="carModel" value="{{ $car->model }}" placeholder="" readonly="">
                        </fieldset>
                      </div>
                    <div class="form-group">
                        <label for="exampleTextarea" class="form-label mt-4">Observaciones de la reparación</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="repair"></textarea>
                    </div>

                    <input type="submit" value="Añadir" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
