<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    // protected $table = "allpayments";

   protected $fillable = [ 'user_name','trans_id','phone','amount','info','completed', 'waiting', 'restart', 'account','user_phone', 'user_email', 'sms_sent'];

    protected $guarded=[];
    // protected $casts=[
    //     'info'=>'array',
    //     'completed'=>'boolean',
    // ];
}
