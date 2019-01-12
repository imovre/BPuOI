<a class="btn btn-primary float-right" href="/cpus/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cpu name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cpus as $cpu)
    <tr>
      <td><?= $cpu->id ?></td>
      <td><?= $cpu->cpuname ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection