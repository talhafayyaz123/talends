<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategorySkills extends Model
{
    use HasFactory;
    protected $table='sub_category_skills';

    protected $fillable = array(
        'category_id' ,
        'sub_category_id',
        'skill_id',
        'status',
    );
}
