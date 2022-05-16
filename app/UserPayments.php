<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayments extends Model
{
    use HasFactory;
    protected $table='user_payments';

    protected $fillable = array(
        'user_id' ,
        'tran_ref',
        'cart_id',
        'cart_amount',
        'token',
        'customer_email',
        'expiry_date',
    );
}
