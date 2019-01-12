@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/rooms" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="room_number" type="varchar" placeholder="Room number">
</div>
<div class="form-group">
    <input class="form-control" name="room_name" type="varchar" placeholder="Room name">
</div>
<div class="form-group">
    <select class="form-control" name="department_id">
    @foreach($departments as $department)
    <option value="{{ $department->id }}">{{ $department->name }}</option>
    @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection