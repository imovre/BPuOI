<a class="btn btn-primary float-right" href="/printers/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Printer number</th>
      <th scope="col">Printer name</th>
      <th scope="col">Purchase date</th>
      <th scope="col">Guarantee date</th>
      <th scope="col">Expiry date</th>
      <th scope="col">Remark</th>
      <th scope="col">Printer type id</th>      
      <th scope="col">Worksite number</th>
      <th scope="col">Worksite name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($printers as $printer)
    <tr>
      <td><?= $printer->id ?></td>
      <td><?= $printer->printer_number ?></td>
      <td><?= $printer->printer_name ?></td>
      <td><?= $printer->purchase_date ?></td>
      <td><?= $printer->guarantee_date ?></td>
      <td><?= $printer->expiry_date ?></td>
      <td><?= $printer->remark ?></td>
      <td><?= $printer->printer_type->typename ?></td>      
      <td><?= $printer->worksite->worksite_number ?></td>
      <td><?= $printer->worksite->worksite_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection