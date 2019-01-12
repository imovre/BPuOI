@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number of countries</th>
      <th scope="col">Native name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($continents as $continent)
    <tr>
      <td><?= $continent->id ?></td>
      <td><?= $continent->name ?></td>
      <td><?= $continent->number_of_countries ?></td>
      <td><?= $continent->native_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection