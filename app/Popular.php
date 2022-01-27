<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    protected $primaryKey = 'id_popular';
    protected $fillable = [
        'type_product',
        'popular',
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
