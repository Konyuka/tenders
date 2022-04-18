<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchasing_Authority',
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
        'categories'
    ];

}
