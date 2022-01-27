<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $primaryKey = 'id_home';
    protected $fillable = [
        'type_product',
        'product',
        'image',
        'price',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id','id_user'); 
    }
    public function category(){
        return $this->belongsTo(Type_product::class, 'type_product');
    }
}
