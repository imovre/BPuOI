<a class="btn btn-primary float-right" href="/printer_types/new">New</a>
@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Printer type</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($printer_types as $printertype)
    <tr>
      <td><?= $printertype->id ?></td>
      <td><?= $printertype->typename ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection