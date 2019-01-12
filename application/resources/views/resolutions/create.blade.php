@extends('layouts.app')

@section('content')

<form method="post" action="/resolutions">
@csrf

<div class="form-group">
    <input class="form-control" name="resolution" type="varchar" placeholder="Resolution">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection