<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Macroprocess extends Model
{
    use SoftDeletes;
    protected $table ='macroprocesses';
    protected $fillable = [
        'name','number'
    ];
}
