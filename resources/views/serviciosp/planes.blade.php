@extends('servicios')


@section('content')

<title>G-mys | Servicios | Planes</title>

<div class="container">
<table class="table table-borderless table-hover">
   <thead>
    <tr class="table-info"  >
      <th scope="col" class="col-md-1 text-center">#</th>
      <th scope="col" class="col-md-2 text-center" >Plan</th>
      <th scope="col" class="col-md-5 text-center">Detalle </th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="text-center">1</th>
      <td>Plan Mensual</td>
      <td>Monitoreo mensual</td>
    </tr>
    <tr>
      <th scope="row" class="text-center">2</th>
      <td>Plan Semestral</td>
      <td>Pague 5 meses de Monitoreo y lleve 6</td>
    </tr>
    <tr>
      <th scope="row" class="text-center">3</th>
      <td>Plan Anual</td>
      <td>Pague 10 meses de Monitoreo y lleve 12</td>
    </tr>
    <tr>
      <th scope="row" class="text-center">4</th>
      <td>Plan Preferencial</td>
      <td>Ingrese mas de 4 vehículos y la mensualidad queda
      en $35.000 (aplica en cualquier plan)</td>
    </tr>
    <tr>
      <th scope="row" class="text-center">5</th>
      <td>Plan VIP</td>
      <td>Ingrese entre 5 y 10 vehículos y la mensualidad
      queda en $30.000 (aplica en cualquier plan)
    </td>
    </tr>
    <tr>
      <th scope="row" class="text-center">6</th>
      <td>Plan Mayorista</td>
      <td>Ingrese más de 11 vehículos y la mensualidad queda
      en $25.000 (aplica en cualquier plan)
      </td>
    </tr>
  </tbody>
</table>
</div>
@endsection