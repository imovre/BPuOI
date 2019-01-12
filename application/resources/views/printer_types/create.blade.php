@extends('layouts.app')

@section('content')

<form method="post" action="/printer_types">
@csrf

<div class="form-group">
    <input class="form-control" name="typename" type="varchar" placeholder="Printer type">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection