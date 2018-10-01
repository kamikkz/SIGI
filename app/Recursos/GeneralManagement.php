<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class GeneralManagement extends Model
{
    use SoftDeletes;
    protected $table ='general_managements';
    protected $fillable = [
        'name',
    ];

    public function dependencias(){
        return $this->hasMany(Dependence::class);
    }
}
