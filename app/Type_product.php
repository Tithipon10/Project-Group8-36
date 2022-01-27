<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    //
    protected $primaryKey = 'id_type_product';

    public function user(){
        return $this->hasOne(User::class, 'id','id_user'); 
    }
    public function product(){
        return $this->hasMany(Home::class, 'type_product');
    }
    public function popular(){
        return $this->hasMany(Popular::class, 'type_product');
    }
}
