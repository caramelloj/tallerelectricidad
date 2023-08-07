@extends('layouts.app')

@section('title', 'Editar datos de vehículo')

@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header h4">
                Actualizar datos de vehículo
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('vehiculos.update', $car->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm mt-8" for="customerName">Patente</label>
                        <input class="form-control form-control-sm" type="text" placeholder="" value="{{ $car->domain }}" id="carDomain" name="carDomain">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm mt-8" for="customerCuit">Modelo</label>
                        <input class="form-control form-control-sm" type="text" placeholder="" value="{{ $car->model }}" id="carModel" name="carModel">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm mt-8" for="customerCuit">Año</label>
                        <input class="form-control form-control-sm" type="text" placeholder="" value="{{ $car->year }}" id="carYear" name="carYear">
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
