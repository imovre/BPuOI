<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    protected $fillable = ['resolution'];
    
    public function monitors()
    {
        return $this->hasMany(\App\Monitor::class);
    }
}
