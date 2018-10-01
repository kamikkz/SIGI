<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Frecuencia extends Model
{
    use SoftDeletes;
    protected $table ='frecuencias';
    protected $fillable = [
        'name'
    ];
}
