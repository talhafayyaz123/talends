<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class SubCategories extends Model
{
    use HasFactory;
    protected $table='sub_categories';

    protected $fillable = array(
        'category_id',
        'title',
        'slug',
        'abstract',
        'image',
        'status',
    );

    public function category(){
    	return $this->belongsTo(category::class,'category_id');
    }

}
