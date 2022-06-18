@php

@endphp
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Código da propriedade para controle intern</th>
        <th scope="col">Nome da propriedade</th>
        <th scope="col">Tipo de propriedade ( rural=1  ou confinamento=2)</th>
        <th scope="col">Estado e município </th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>


{{-- foreach vai aqui --}}
      <tr>
        <th scope="row">1</th>
        <td>{{ $head['userId']}}</td>
        <td>{{ $head['title'] }}</td>
        <td>teste</td>
        <td>teste</td>
        <td>teste</td>
      </tr>
{{-- termina aqui --}}
    </tbody>
  </table>


</h1>
