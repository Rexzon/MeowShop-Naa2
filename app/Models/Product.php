<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable =[
        'Pname',
        'Price',
        'Pimage',
        'Ptype'
    ];

    public function Porders(){
        return $this->hasMany(Order::class,'pro_id','id');
    }
}
