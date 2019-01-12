<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worksite extends Model
{
    protected $fillable = ['worksite_number', 'worksite_name', 'room_id'];

    public function room()
    {
        return $this->belongsTo(\App\Room::class);
    }

    public function computers()
    {
        return $this->hasMany(\App\Computer::class);
    }

    public function printers()
    {
        return $this->hasMany(\App\Printer::class);
    }

    public function monitors()
    {
        return $this->hasMany(\App\Monitor::class);
    }
}
