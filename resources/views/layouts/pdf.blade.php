<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial de reparaciones</title>

    <style type="text/css">
        *{
          font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
          font-size: 12px;
        }
        .tables{
            justify-content: center;
        }
        #obs{
            text-align: right;
        }
        th{
          border: 1px solid black;
          text-align: center;
        }

        tr,td {
          border: 1px solid black;
          text-align: center;
        }
        h2{
          font-size: 14px;
          text-align: center;
        }
        .thead-intervencion{
            background: rgba(3, 3, 3, 0.918);
            color: white;
        }
        body {
            min-height : 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

      </style>
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

      <div class="table-responsive">
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
                        <th>{{ ($repair->created_at)->format('d-m-Y') }}</th>
                        <th>{{ $repair->observations }}</th>
                @empty
                        <h1>No hay registros para mostrar</h1>
                @endforelse
            </tbody>
        </table>
      </div>

</body>
</html>
