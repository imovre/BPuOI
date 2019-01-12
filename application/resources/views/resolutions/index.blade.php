<a class="btn btn-primary float-right" href="/resolutions/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Resolution</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($resolutions as $resolution)
    <tr>
      <td><?= $resolution->id ?></td>
      <td><?= $resolution->resolution ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection