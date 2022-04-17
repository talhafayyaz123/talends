<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireAgency extends Model
{
    use HasFactory;

    protected $table='hire_agency';

    protected $fillable = array(
        'agency_id',
        'full_name',
        'company_name',
        'email',
        'phone_number',
        'detail',
    );
}
