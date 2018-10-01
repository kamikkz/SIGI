<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Temporality extends Model
{
    use SoftDeletes;
    protected $table ='temporalities';
    protected $fillable = [
        'name'
    ];
}
