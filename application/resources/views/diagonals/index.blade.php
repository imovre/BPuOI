<a class="btn btn-primary float-right" href="/diagonals/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Diagonal</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($diagonals as $diagonal)
    <tr>
      <td><?= $diagonal->id ?></td>
      <td><?= $diagonal->diagonal ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection