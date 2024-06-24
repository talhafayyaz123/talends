<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class UserPayments extends Model
{
    use HasFactory;
    protected $table='user_payments';

    protected $fillable = array(
        'user_id' ,
        'package_id',
        'tran_ref',
        'cart_id',
        'cart_amount',
        'token',
        'customer_email',
        'expiry_date',
        'is_success',
        'created_at'
    );

    public function userTransactions(){
        return $this->hasMany(UserTransactions::class,'user_id','user_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');   
    }

    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
}
