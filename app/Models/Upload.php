<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchasing_authority',
        'tender_number',
        'tender_brief',
        'competition_type',
        'category',
        'funded_by',
        'country',
        'value',
        'work_detail',
        'expiry',
        'address',
        'email',
        'phone',
        'link'
    ];

}
