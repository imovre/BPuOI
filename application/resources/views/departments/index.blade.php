<a class="btn btn-primary float-right" href="/departments/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Department code</th>
      <th scope="col">Department name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($departments as $department)
    <tr>
      <td><?= $department->id ?></td>
      <td><?= $department->code ?></td>
      <td><?= $department->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection