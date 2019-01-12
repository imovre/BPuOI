<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    protected $fillable = ['cpuname'];
    
    public function computers()
    {
        return $this->hasMany(\App\Computer::class);
    }
}
