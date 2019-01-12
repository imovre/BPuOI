<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagonal extends Model
{
    protected $fillable = ['diagonal'];

    public function monitors()
    {
        return $this->hasMany(\App\Monitor::class);
    }
}
