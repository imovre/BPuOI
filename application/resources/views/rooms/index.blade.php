<a class="btn btn-primary float-right" href="/rooms/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Room number</th>
      <th scope="col">Room name</th>
      <th scope="col">Department name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($rooms as $room)
    <tr>
      <td><?= $room->id ?></td>
      <td><?= $room->room_number ?></td>
      <td><?= $room->room_name ?></td>
      <td><?= $room->department->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection