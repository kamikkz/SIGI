<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Frecuency extends Model
{
    use SoftDeletes;
    protected $table ='frequencies';
    protected $fillable = [
        'name'
    ];
}
