<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class AgencyServices extends Model
{
    use HasFactory;
    protected $fillable = array(
        'title', 'slug','abstract','image'
    );

    public function saveServices($request)
    {
        if (!empty($request)) {
           
            $this->title = filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            $this->slug = filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            // $this->abstract = filter_var($request['category_abstract'], FILTER_SANITIZE_STRING);
            $this->abstract = $request['category_abstract'];
            $old_path = Helper::PublicPath() . '/uploads/agency_services/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {


                    $s3_path = 'uploads/agency_services';
                    
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

    
    public function updateServiceServices($request, $id)
    {
        if (!empty($request)) {
            $cats = self::find($id);
            if ($cats->title != $request['category_title']) {
                $cats->slug  =  filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            }
            $cats->title = filter_var($request['category_title'], FILTER_SANITIZE_STRING);
            // $cats->abstract = filter_var($request['category_abstract'], FILTER_SANITIZE_STRING);
            $cats->abstract = $request['category_abstract'];
            $old_path = Helper::PublicPath() . '/uploads/agency_services/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {
                    $new_path = Helper::PublicPath().'/uploads/agency_services/';
                    $s3_path = 'uploads/agency_services';
                    $filename = time() . '-' . $request['uploaded_image'];


                    
                    if(isset($cats->image) && !empty($cats->image) ){
                        $file =$cats->image;
                         
                    if(Storage::disk('s3')->exists('uploads/agency_services/'.$file)){
                      
                      Storage::disk('s3')->delete('uploads/agency_services/'.$file); 
                      
                    }
                    
                    if(Storage::disk('s3')->exists('uploads/agency_services/small-'.$file)){
                      
                        Storage::disk('s3')->delete('uploads/agency_services/small-'.$file); 
                        
                    }

                    if(Storage::disk('s3')->exists('uploads/agency_services/medium-'.$file)){
                      
                        Storage::disk('s3')->delete('uploads/agency_services/medium-'.$file); 
                        
                    }
    
                }

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
