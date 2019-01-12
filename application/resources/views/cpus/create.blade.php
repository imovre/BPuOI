@extends('layouts.app')

@section('content')

<form method="post" action="/cpus">
@csrf

<div class="form-group">
    <input class="form-control" name="cpuname" type="varchar" placeholder="Cpu name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection