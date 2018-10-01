<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Frecc extends Model
{
    use SoftDeletes;
    protected $table ='freccs';
    protected $fillable = [
        'name','general_management_id',
    ];
}
