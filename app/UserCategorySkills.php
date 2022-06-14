<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategorySkills extends Model
{
    use HasFactory;
    protected $table='user_category_skills';

    protected $fillable = array(
        'user_id' ,
        'skill_id',
    );

    public function skill()
    {
        return $this->belongsTo('App\Skill');
    }
}
