<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $fillable = ['monitor_number', 'monitor_name', 'purchase_date', 'guarantee_date', 'expiry_date', 'remark', 'diagonal_id', 'resolution_id', 'worksite_id'];

    public function diagonal()
    {
        return $this->belongsTo(\App\Diagonal::class);
    }

    public function resolution()
    {
        return $this->belongsTo(\App\Resolution::class);
    }

    public function worksite()
    {
        return $this->belongsTo(\App\Worksite::class);
    }
}
