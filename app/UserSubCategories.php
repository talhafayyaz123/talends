<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubCategories extends Model
{
    use HasFactory;
    protected $table='user_sub_categories';

    protected $fillable = array(
        'user_id' ,
        'sub_category_id',
    );
}
