@extends('layouts.app')

@section('content')

<form method="post" action="/hdds">
@csrf

<div class="form-group">
    <input class="form-control" name="type" type="varchar" placeholder="Hdd type">
</div>
<div class="form-group">
    <input class="form-control" name="size" type="integer" placeholder="Hdd size">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection