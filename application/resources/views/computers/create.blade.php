@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/computers">
@csrf

<div class="form-group">
    <input class="form-control" name="computer_number" type="varchar" placeholder="Computer number">
</div>
<div class="form-group">
    <input class="form-control" name="computer_name" type="varchar" placeholder="Computer name">
</div>
<div class="form-group">
    <input class="form-control" name="odd" type="tinyint" placeholder="Odd">
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
    <select class="form-control" name="cpu_id">
        @foreach($cpus as $cpu)
        <option value="{{ $cpu->id }}">{{ $cpu->cpuname }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="hdd_id">
        @foreach($hdds as $hdd)
        <option value="{{ $hdd->id }}">{{ $hdd->size }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="worksite_id">
        @foreach($worksites as $worksite)
        <option value="{{ $worksite->id }}">{{ $worksite->worksite_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection