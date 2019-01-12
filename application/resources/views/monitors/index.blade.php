<a class="btn btn-primary float-right" href="/monitors/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Monitor number</th>
      <th scope="col">Monitor name</th>
      <th scope="col">Purchase date</th>
      <th scope="col">Guarantee date</th>
      <th scope="col">Expiry date</th>
      <th scope="col">Remark</th>
      <th scope="col">Diagonal id</th>
      <th scope="col">Resolution id</th>
      <th scope="col">Worksite number</th>
      <th scope="col">Worksite name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($monitors as $monitor)
    <tr>
      <td><?= $monitor->id ?></td>
      <td><?= $monitor->monitor_number ?></td>
      <td><?= $monitor->monitor_name ?></td>
      <td><?= $monitor->purchase_date ?></td>
      <td><?= $monitor->guarantee_date ?></td>
      <td><?= $monitor->expiry_date ?></td>
      <td><?= $monitor->remark ?></td>
      <td><?= $monitor->diagonal->diagonal ?></td>
      <td><?= $monitor->resolution->resolution ?></td>
      <td><?= $monitor->worksite->worksite_number ?></td>
      <td><?= $monitor->worksite->worksite_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection