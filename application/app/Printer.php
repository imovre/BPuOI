<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $fillable = ['printer_number', 'printer_name', 'purchase_date', 'guarantee_date', 'expiry_date', 'remark', 'printer_type_id', 'worksite_id'];

    public function printer_type()
    {
        return $this->belongsTo(\App\PrinterType::class);
    }

    public function worksite()
    {
        return $this->belongsTo(\App\Worksite::class);
    }
}
