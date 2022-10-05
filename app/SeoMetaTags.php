<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SeoMetaTags extends Model
{
    use HasFactory;
    protected $table='seo_meta_tags';
    
    protected $fillable = array(
        'meta_page_name' ,
        'meta_page_slug',
        'meta_title',
        'meta_description',
        'meta_keywords'
    );

    public function saveMetaTags($request)
    {
        if (!empty($request)) {
            
            $this->meta_page_name = filter_var($request['meta_page_name'], FILTER_SANITIZE_STRING);
            $this->meta_title = filter_var($request['meta_title'], FILTER_SANITIZE_STRING);
            $this->meta_keywords = filter_var($request['meta_keywords'], FILTER_SANITIZE_STRING);
            $this->meta_description = filter_var($request['meta_description'], FILTER_SANITIZE_STRING);
            $this->meta_page_slug = Str::slug($request['meta_page_name']);
            return $this->save();
        }
    }

    public function updateMetaTags($request, $id)
    {
        if (!empty($request)) {
            $tag = self::find($id);
            $tag->meta_title = filter_var($request['meta_title'], FILTER_SANITIZE_STRING);
            $tag->meta_keywords = filter_var($request['meta_keywords'], FILTER_SANITIZE_STRING);
            $tag->meta_description = filter_var($request['meta_description'], FILTER_SANITIZE_STRING);
            $tag->save();
        }
    }
} 
