<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
// use Maatwebsite\Excel\Concerns\ToModel;

class Post extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'Posts';

    protected $fillable = [
        'purchasing_authority',
        'tender_number',
        'tender_brief',
        'competition_type',
        'funded_by',
        'country',
        'title',
        'value',
        'work_detail',
        'address',
        'email',
        'link',
        'expiry',
    ];

    // public function orders(){
    //     return $this->hasMany(Order::class);
    // }

}
