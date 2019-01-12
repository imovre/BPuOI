@extends('layouts.app')

@section('content')

<form method="post" action="/departments">
@csrf

<div class="form-group">
    <input class="form-control" name="code" type="varchar" placeholder="Department code">
</div>
<div class="form-group">
    <input class="form-control" name="name" type="varchar" placeholder="Department name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection