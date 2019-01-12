<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['code', 'name'];
    
    public function rooms()
    {
        return $this->hasMany(\App\Room::class);
    }
}
