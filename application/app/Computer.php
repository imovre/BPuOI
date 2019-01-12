<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = ['computer_number', 'computer_name', 'odd', 'purchase_date', 'guarantee_date', 'expiry_date', 'remark', 'cpu_id', 'hdd_id', 'worksite_id'];

    public function cpu()
    {
        return $this->belongsTo(\App\Cpu::class);
    }

    public function hdd()
    {
        return $this->belongsTo(\App\Hdd::class);
    }    

    public function worksite()
    {
        return $this->belongsTo(\App\Worksite::class);
    }
}
