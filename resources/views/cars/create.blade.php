@extends('layouts.app')

@section('title', 'Crear nuevo vehículo')

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header h4">
            Crear nuevo automóvil
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('vehiculos.store')}}">
                @csrf
                <div class="form-group">
                    <fieldset>
                      <label class="form-label mt-8" for="readOnlyInput">Nombre del propietario</label>
                      <input class="form-control form-control-sm" id="readOnlyInput" type="text" placeholder="{{ $customer->name }}" readonly="">
                    </fieldset>
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <label class="form-label mt-8" for="readOnlyInput">ID del propietario</label>
                      <input class="form-control form-control-sm" id="readOnlyInput" type="text" name="customerId" value="{{ $customer->id }}" placeholder="{{ $customer->cuit_cuil }}" readonly="">
                    </fieldset>
                  </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm mt-8" for="customerName">Ingrese patente del automóvil</label>
                    <input class="form-control form-control-sm" type="text" placeholder="" id="domainCar" name="domainCar">
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm mt-8" for="customerCuit">Ingrese marca y modelo del automóvil</label>
                    <input class="form-control form-control-sm" type="text" placeholder="" id="carModel" name="carModel">
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm mt-8" for="customerAddress">Ingrese el año de fabricación del automóvil</label>
                    <input class="form-control form-control-sm" type="text" placeholder="" id="carYear" name="carYear">
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Crear">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
