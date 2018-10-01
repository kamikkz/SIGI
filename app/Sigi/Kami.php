<?php

namespace App\Sigi;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Kami extends Model
{
    use SoftDeletes;
    protected $table ='kamis';
    protected $fillable = [
        'user_id','dependencia','status',
    ];
    public function usuario(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function cinternos(){
        return $this->hasMany(Cinterno::class);
    }
}
