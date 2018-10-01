<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Periodicity extends Model
{
    use SoftDeletes;
    protected $table ='periodicities';
    protected $fillable = [
        'name'
    ];
}
