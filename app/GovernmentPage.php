<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\File as File;

class GovernmentPage extends Model
{
    use HasFactory;
    protected $table='government_page';

    protected $fillable = array(
        'banner_description', 'government_image','content_description','content_image','opportunity_providers','opportunity_seekers','process','features_text','services_description'
    );


    public function updateGovernment($request, $id)
    {

        if (!empty($request)) {
            $government = self::find($id);
         
            $government->banner_description = $request['banner_description'];

        
            $government->content_description = $request['content_description'];

            $government->opportunity_providers = $request['opportunity_providers'];
            $government->opportunity_seekers = $request['opportunity_seekers'];

            $government->process = $request['process'];


            $government->features_text = $request['features_text'];
            $government->services_description = $request['services_description'];
                
             
            if (!empty($request->hasFile('government_image'))) {
                $government_image = $request->file('government_image');
                

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/government' . '/' . $request->hidden_government_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/government' . '/' . $request->hidden_government_image);               
                }

                
                $new_path = Helper::PublicPath().'/uploads/home-pages/government';
                $imageName = time().'.'.$government_image->getClientOriginalName();  
        
                $request->government_image->move($new_path, $imageName);
                $government->government_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $government->government_image =$request->hidden_government_image;
            } 



            if (!empty($request->hasFile('content_image'))) {
                $content_image = $request->file('content_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/government' . '/' . $request->hidden_banner_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/government' . '/' . $request->hidden_banner_image);               
                }
                $new_path = Helper::PublicPath().'/uploads/home-pages/government';
                $imageName = time().'.'.$content_image->getClientOriginalName();  
                $request->content_image->move($new_path, $imageName);
                $government->content_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $government->content_image = $request->hidden_banner_image;
            }
            
            
           
            return $government->save();
        }
    }

    public function saveGovernment($request)
    {
        if (!empty($request)) {
            $this->banner_description = $request['banner_description'];
            $this->content_description = $request['content_description'];

            $this->opportunity_providers = $request['opportunity_providers'];
            $this->opportunity_seekers = $request['opportunity_seekers'];

            $this->process = $request['process'];


            $this->features_text = $request['features_text'];
            $this->services_description = $request['services_description'];

             if (!empty($request->hasFile('government_image'))) {
                $government_image = $request->file('government_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/government';
                $imageName = time().'.'.$government_image->getClientOriginalName();
                $request->government_image->move($new_path, $imageName);
                $this->government_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->government_image = null;
            } 

            if (!empty($request->hasFile('content_image'))) {
                $content_image = $request->file('content_image');
                
                $new_path = Helper::PublicPath().'/uploads/home-pages/government';
                $imageName = time().'.'.$content_image->getClientOriginalName();  
                $request->content_image->move($new_path, $imageName);
                $this->content_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->content_image = null;
            } 

            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'Government Page Created';
            return $json;
        }
    }
}
