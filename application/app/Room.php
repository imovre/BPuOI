<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_number', 'room_name', 'department_id'];

    public function department()
    {
        return $this->belongsTo(\App\Department::class);
    }

    public function worksites()
    {
        return $this->hasMany(\App\Worksite::class);
    }
}
