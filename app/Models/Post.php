<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Post extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'Posts';

    protected $fillable = [
        'title',
        'description',
        'funding',
        'identity',
        'value',
        'country',
        'price',
        'competition',
        'expiry'
    ];

    // public function orders(){
    //     return $this->hasMany(Order::class);
    // }

}
