<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
    protected $fillable = ['type', 'size'];

    public function computers()
    {
        return $this->hasMany(\App\Computer::class);
    }
}
