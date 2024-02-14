<?php
/**
 * Class Category
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use File;
use Storage;
use App\SubCategories;
use App\SubCategorySkills;

use function Psy\debug;

/**
 * Class Category
 *
 */
class Category extends Model
{
    /**
     * Fillables for the database
     *
     * @access protected
     *
     * @var array $fillable
     */
    protected $fillable = array(
        'title', 'slug', 'abstract','parent_category'
    );

    /**
     * Protected Date
     *
     * @access protected
     * @var    array $dates
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get all of the users that are assigned this category.
     *
     * @return relation
     */
    public function freelancers()
    {
        return $this->morphedByMany('App\User', 'catable');
    }

    public function categoryFreelancers(){
    	return $this->hasMany(Profile::class,'category_id');
    }

    public function subCategories(){
    	return $this->hasMany(subCategories::class,'category_id');
    }

    /**
     * Get all of the jobs that are assigned this category.
     *
     * @return relation
     */
    public function jobs()
    {
        return $this->morphedByMany('App\Job', 'catable');
    }

    /**
     * Get all of the services that are assigned this category.
     *
     * @return relation
     */
    public function services()
    {
        return $this->morphedByMany('App\Service', 'catable');
    }

    /**
     * Set slug before saving in DB
     *
     * @param string $value value
     *
     * @access public
     *
     * @return string
     */
    public function setSlugAttribute($value)
    {
        if (!empty($value)) {
            $temp = str_slug($value, '-');
            if (!Category::all()->where('slug', $temp)->isEmpty()) {
                $i = 1;
                $new_slug = $temp . '-' . $i;
                while (!Category::all()->where('slug', $new_slug)->isEmpty()) {
                    $i++;
                    $new_slug = $temp . '-' . $i;
                }
                $temp = $new_slug;
            }
            $this->attributes['slug'] = $temp;
        }
    }

    /**
     * Saving categories
     *
     * @param string $request get req attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function saveCategories($request)
    {
        if (!empty($request)) {
           
            $this->title = filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            $this->slug = filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            $this->parent_category = filter_var($request['parent_category'], FILTER_SANITIZE_STRING);
            // $this->abstract = filter_var($request['category_abstract'], FILTER_SANITIZE_STRING);
            $this->abstract = $request['category_abstract'];
            $old_path = Helper::PublicPath() . '/uploads/categories/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
               
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {


                    $new_path = Helper::PublicPath().'/uploads/categories/';
                    $s3_path = 'uploads/categories';
                    
                    $filename = time() . '-' . $request['uploaded_image'];

                    $contents = file_get_contents($old_path . '/' . $request['uploaded_image']);
                    Storage::disk('s3')->put($s3_path. '/' . $filename,$contents  );  


                    $contents = file_get_contents($old_path . '/small-' . $request['uploaded_image']);
                    Storage::disk('s3')->put($s3_path. '/small-' . $filename,$contents  );  


                    $contents = file_get_contents($old_path . '/medium-' . $request['uploaded_image']);
                    Storage::disk('s3')->put($s3_path. '/medium-' . $filename,$contents  ); 
                    
                    
                    unlink($old_path . '/' . $request['uploaded_image']);
                    unlink($old_path . '/small-' . $request['uploaded_image']);
                    unlink($old_path . '/medium-' . $request['uploaded_image']);


                }
                $this->image = filter_var($filename, FILTER_SANITIZE_STRING);
            } else {
                $this->image = null;
            }
            $this->save();

            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_created');
            return $json;
        }
    }

    public function saveSubCategories($request)
    {
        if (!empty($request)) {
           $category_id = $request['category_id'];
            
           // add data into sub categories
           $SubCategories = new SubCategories();
           $sub_category= $request['sub_category'];

           $sub_category= filter_var($sub_category, FILTER_SANITIZE_STRING);
           $sub_category_slug = filter_var($sub_category, FILTER_SANITIZE_STRING);


             $sub_cat= $SubCategories::create([
               'category_id'=> $category_id,
                   'title'=> $sub_category,
                    'slug'=>  $sub_category_slug,

           ]);
         $lastInsertedId= $sub_cat->id ;
        
            $skills= $request['skills'];
           $insert = array();

           foreach($skills as $index=>$value){
              $draw = [   
                   'category_id'=>  $category_id,
                   'sub_category_id'=>  $lastInsertedId,
                   'skill_id'=>  $value

              ];
              $insert[] = $draw;

             }

             \DB::table('sub_category_skills')->insert($insert);
        
            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_created');
            return $json;
        }
    }

    public function updateSubCategories($request,$id)
    {
        if (!empty($request)) {
           $category_id = $request['category_id'];
           
           // add data into sub categories
           $sub_category= $request['sub_category'];

           $sub_category= filter_var($sub_category, FILTER_SANITIZE_STRING);
           $sub_category_slug = filter_var($sub_category, FILTER_SANITIZE_STRING);
          
             $sub_cat= SubCategories::where('sub_category_id',$id)->update([
               'category_id'=> $category_id,
                'title'=> $sub_category,
                 'slug'=>  $sub_category_slug,
           ]);
            

            SubCategorySkills::where('sub_category_id', $id)->delete();

            $skills= $request['skills'];
           $insert = array();

           foreach($skills as $index=>$value){
            $draw = [   
                 'category_id'=>  $category_id,
                 'sub_category_id'=>  $id,
                 'skill_id'=>  $value

            ];
            $insert[] = $draw;
           }

           \DB::table('sub_category_skills')->insert($insert);

            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_created');
            return $json;
        }
    }
    /**
     * Updating Categories
     *
     * @param string $request get request attributes
     * @param int    $id      get department id for updation
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCategories($request, $id)
    {
        if (!empty($request)) {
            $cats = self::find($id);
            if ($cats->title != $request['category_title']) {
                $cats->slug  =  filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            }
            $cats->title = filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            $cats->parent_category = filter_var($request['parent_category'], FILTER_SANITIZE_STRING);
            // $cats->abstract = filter_var($request['category_abstract'], FILTER_SANITIZE_STRING);
            $cats->abstract = $request['category_abstract'];
            $old_path = Helper::PublicPath() . '/uploads/categories/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
                 
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {
                    
                    if(isset($cats->image) && !empty($cats->image) ){
                        $file =$cats->image;
                         
                    if(Storage::disk('s3')->exists('uploads/categories/'.$file)){
                      
                      Storage::disk('s3')->delete('uploads/categories/'.$file); 
                      
                    }
                    
                    if(Storage::disk('s3')->exists('uploads/categories/small-'.$file)){
                      
                        Storage::disk('s3')->delete('uploads/categories/small-'.$file); 
                        
                    }

                    if(Storage::disk('s3')->exists('uploads/categories/medium-'.$file)){
                      
                        Storage::disk('s3')->delete('uploads/categories/medium-'.$file); 
                        
                    }
    
                    }

                    $s3_path = 'uploads/categories';
                    
                    $filename = time() . '-' . $request['uploaded_image'];

                    $contents = file_get_contents($old_path . '/' . $request['uploaded_image']);
                    Storage::disk('s3')->put($s3_path. '/' . $filename,$contents  );  


                    $contents = file_get_contents($old_path . '/small-' . $request['uploaded_image']);
                    Storage::disk('s3')->put($s3_path. '/small-' . $filename,$contents  );  


                    $contents = file_get_contents($old_path . '/medium-' . $request['uploaded_image']);
                    Storage::disk('s3')->put($s3_path. '/medium-' . $filename,$contents  ); 
                    
                    
                    unlink($old_path . '/' . $request['uploaded_image']);
                    unlink($old_path . '/small-' . $request['uploaded_image']);
                    unlink($old_path . '/medium-' . $request['uploaded_image']);


                }
                $cats->image = filter_var($filename, FILTER_SANITIZE_STRING);
            } else {
                $cats->image = null;
            }
            return $cats->save();
        }
    }
}
