@extends('layouts.app')

@section('content')

<form method="post" action="/diagonals">
@csrf

<div class="form-group">
    <input class="form-control" name="diagonal" type="integer" placeholder="Diagonal">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection