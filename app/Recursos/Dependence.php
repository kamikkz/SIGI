<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Dependence extends Model
{
    use SoftDeletes;
    protected $table ='dependences';
    protected $fillable = [
        'name','general_management_id',
    ];
    public function direccion(){
        return $this->belongsTo(GeneralManagement::class,'general_management_id');
    }
}
