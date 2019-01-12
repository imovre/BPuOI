<a class="btn btn-primary float-right" href="/computers/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Computer number</th>
      <th scope="col">Computer name</th>
      <th scope="coll">Odd</th>
      <th scope="col">Purchase date</th>
      <th scope="col">Guarantee date</th>
      <th scope="col">Expiry date</th>
      <th scope="col">Remark</th>
      <th scope="col">Cpu name</th>
      <th scope="col">HDD type</th>
      <th scope="col">HDD size</th>
      <th scope="col">Worksite number</th>
      <th scope="col">Worksite name</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($computers as $computer)
    <tr>
      <td><?= $computer->id ?></td>
      <td><?= $computer->computer_number ?></td>
      <td><?= $computer->computer_name ?></td>
      <td><?= $computer->odd ?></td>
      <td><?= $computer->purchase_date ?></td>
      <td><?= $computer->guarantee_date ?></td>
      <td><?= $computer->expiry_date ?></td>
      <td><?= $computer->remark ?></td>
      <td><?= $computer->cpu->cpuname ?></td>
      <td><?= $computer->hdd->type ?></td>
      <td><?= $computer->hdd->size ?></td>
      <td><?= $computer->worksite->worksite_number ?></td>
      <td><?= $computer->worksite->worksite_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection