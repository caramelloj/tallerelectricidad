<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial de reparaciones</title>
</head>
<body>

    <div id="proprietary">
        <p><b>Propietario: </b>{{ $vehicleData[0]->proprietary_name  }}</p>
        <p><b>Cuit-Cuil </b>{{ $vehicleData[0]->cuit_cuil }}</p>
        <p><b>Modelo: </b>{{ $vehicleData[0]->model }}</p>
        <p><b>Año: </b>{{ $vehicleData[0]->year }}</p>
        <p><b>Patente: </b>{{ $vehicleData[0]->domain }}</p>
      </div>

      <h3>Historial de reparaciones</h3>

      <table id="obs" class="tables" cellspacing="0" cellpadding="0" width="100%">
        <thead class="thead-intervencion">
            <tr>
            <th>Fecha</th>
            <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($repairs as $repair)
                <tr>
                    <th>{{ $repair->id }}</th>
                    <th>{{ $repair->observations }}</th>

                @empty
                    <h1>No hay registros para mostrar</h1>
            @endforelse
        </tbody>
    </table>
</body>
</html>
