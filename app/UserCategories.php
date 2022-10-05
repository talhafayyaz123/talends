<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategories extends Model
{
    use HasFactory;
    protected $table='user_categories';

    protected $fillable = array(
        'useer_id' ,
        'category_id',
    );

}
