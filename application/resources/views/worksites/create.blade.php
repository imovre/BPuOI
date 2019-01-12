@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/worksites" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="worksite_number" type="varchar" placeholder="Worksite number">
</div>
<div class="form-group">
    <input class="form-control" name="worksite_name" type="varchar" placeholder="Worksite name">
</div>
<div class="form-group">
    <select class="form-control" name="room_id">
        @foreach($rooms as $room)
        <option value="{{ $room->id }}">{{ $room->room_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection