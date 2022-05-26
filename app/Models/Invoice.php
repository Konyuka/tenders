<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [ 'prefix','number_sequence','invoice_number', 'unique_timestamp', 'amount','post_id','payment_type', 'payment_status', 'trans_id','client_id', 'user_phone', 'user_email', 'user_name'];
}
