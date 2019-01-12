<a class="btn btn-primary float-right" href="/worksites/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Worksite number</th>
      <th scope="col">Worksite name</th>
      <th scope="col">Room number</th>
      <th scope="col">Room name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($worksites as $worksite)
    <tr>
      <td><?= $worksite->id ?></td>
      <td><?= $worksite->worksite_number ?></td>
      <td><?= $worksite->worksite_name ?></td>
      <td><?= $worksite->room->room_number ?></td>
      <td><?= $worksite->room->room_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection