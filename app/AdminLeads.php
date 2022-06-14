<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLeads extends Model
{
    use HasFactory;

    protected $fillable = array(
        'lead_uuid', 'email', 'full_name',
        'company_name','phone_number','detail'
    );

}
