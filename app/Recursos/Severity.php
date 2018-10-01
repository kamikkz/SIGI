<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Severity extends Model
{
    use SoftDeletes;
    protected $table ='severities';
    protected $fillable = [
        'name'
    ];
}
