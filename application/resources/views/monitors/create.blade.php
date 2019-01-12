@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/monitors">
@csrf

<div class="form-group">
    <input class="form-control" name="monitor_number" type="varchar" placeholder="Monitor number">
</div>
<div class="form-group">
    <input class="form-control" name="monitor_name" type="integer" placeholder="Monitor name">
</div>
<div class="form-group">
    <input class="form-control" name="purchase_date" type="date" placeholder="Purchase date">
</div>
<div class="form-group">
    <input class="form-control" name="guarantee_date" type="date" placeholder="Guarantee date">
</div>
<div class="form-group">
    <input class="form-control" name="expiry_date" type="date" placeholder="Expiry date">
</div>
<div class="form-group">
    <input class="form-control" name="remark" type="varchar" placeholder="Remark">
</div>
<div class="form-group">
    <select class="form-control" name="diagonal_id">
    @foreach($diagonals as $diagonal)
    <option value="{{$diagonal->id}}">{{$diagonal->diagonal}}</option>
    @endforeach
    </select>     
</div>
<div class="form-group">
    <select class="form-control" name="resolution_id">
    @foreach($resolutions as $resolution)
    <option value="{{$resolution->id}}">{{$resolution->resolution}}</option>
    @endforeach
    </select>     
</div>
<div class="form-group">
    <select class="form-control" name="worksite_id">
    @foreach($worksites as $worksite)
    <option value="{{$worksite->id}}">{{$worksite->worksite_name}}</option>
    @endforeach
    </select>     
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection