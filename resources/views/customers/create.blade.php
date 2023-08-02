@extends('layouts.app')
@section('title', 'Crear cliente')

@section('content')

<div class="container py-4">
        <div class="card">
            <div class="card-header h4">
                Crear nuevo cliente
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('clientes.store')}}">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm mt-8" for="customerName">Ingrese nombre del cliente</label>
                        <input class="form-control form-control-sm" type="text" placeholder="" id="customerName" name="customerName">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm mt-8" for="customerCuit">Ingrese el cuit/cuil del cliente</label>
                        <input class="form-control form-control-sm" type="text" placeholder="" id="customerCuit" name="customerCuit">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm mt-8" for="customerAddress">Ingrese la dirección del cliente</label>
                        <input class="form-control form-control-sm" type="text" placeholder="" id="customerAddress" name="customerAddress">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm mt-8" for="customerPhone">Ingrese el teléfono del cliente</label>
                        <input class="form-control form-control-sm" type="text" placeholder="" id="customerPhone" name="customerPhone">
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
