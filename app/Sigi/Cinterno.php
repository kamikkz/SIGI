<?php

namespace App\Sigi;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cinterno extends Model
{
    protected $table ='cinternos';
    protected $fillable = [
        'kami_id',
        'ci_01',
        'ci_02',
        'ci_03',
        'ci_04',
        'ci_05',
        'ci_06',
    ];
    public function kami(){
        return $this->belongsTo(Kami::class,'kami_id');
    }
}
