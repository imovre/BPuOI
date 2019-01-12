<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrinterType extends Model
{
    protected $fillable = ['typename'];

    public function printers()
    {
        return $this->hasMany(\App\Printer::class);
    }
}
