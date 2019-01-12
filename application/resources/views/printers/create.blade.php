@extends('layouts.app')

@section('content')


@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif


<form method="post" action="/printers">
@csrf

<div class="form-group">
    <input class="form-control" name="printer_number" type="varchar" placeholder="Printer number">
</div>
<div class="form-group">
    <input class="form-control" name="printer_name" type="varchar" placeholder="Printer name">
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
    <select class="form-control" name="printer_type_id">
        @foreach($printer_types as $printertype)
        <option value="{{ $printertype->id }}">{{ $printertype->typename }}</option>
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