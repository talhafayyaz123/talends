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
        'transection_type',
        'created_at'
    );
    public function user()
    {
        return $this->belongsTo('App\User');   
    }

    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}
