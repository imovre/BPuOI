<a class="btn btn-primary float-right" href="/hdds/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hdd type</th>
      <th scope="col">Hdd size</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($hdds as $hdd)
    <tr>
      <td><?= $hdd->id ?></td>
      <td><?= $hdd->type ?></td>
      <td><?= $hdd->size ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection