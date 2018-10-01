<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LifeCycleInfluence extends Model
{
    use SoftDeletes;
    protected $table ='life_cycle_influences';
    protected $fillable = [
        'name'
    ];
}
