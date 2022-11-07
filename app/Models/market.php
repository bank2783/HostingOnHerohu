<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class market extends Model
{
    use HasFactory;

    protected $fillable =[
        'market_name',
        'market_address',
        'market_status',
        'user_id',
    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
