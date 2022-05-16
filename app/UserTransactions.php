<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTransactions extends Model
{
    use HasFactory;
    protected $table='user_transactions';
    
    protected $fillable = array(
        'user_id' ,
        'tran_ref',
        'cart_id',
        'cart_amount',
        'transection_type'
    );
}
