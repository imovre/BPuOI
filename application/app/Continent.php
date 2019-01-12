<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = ['name', 'number_of_countries', 'native_name'];


public function departments()
{
    return $this->hasMany(\App\Department::class);
}

}   