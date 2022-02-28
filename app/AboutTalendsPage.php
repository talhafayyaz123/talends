<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTalendsPage extends Model
{
    use HasFactory;

    protected $table='about_talends_page';

    protected $fillable = array(
        'page_type' ,
        'banner_description',
        'about_talends_image',
        'features_text',
        'services_description',
        'project_description',
        'talends_project_image',
        'work_description',
        'talends_work_image',
        'payment_description',

        'talends_payment_image',
        'support_description',
        'talends_support_image',
        'freelancer_benefits',
        'internees_benefits',
        'agencies_benefits',
        'government_benefits',
        'short_term_project_image',
        'recurring_engagements_image',
        'long_term_work_image',
    );


    public function saveAboutTalends($request)
    {

            if (!empty($request)) {
            
            $this->page_type = 'about_talends';
            $this->banner_description = $request['banner_description'];
            $this->features_text = $request['features_text'];
            $this->services_description = $request['services_description'];
            $this->project_description = $request['project_description'];
            $this->work_description = $request['work_description'];
            $this->payment_description = $request['payment_description'];
            $this->support_description = $request['support_description'];


            $this->freelancer_benefits = $request['freelancer_benefits'];
            $this->internees_benefits = $request['internees_benefits'];
            $this->agencies_benefits = $request['agencies_benefits'];
            $this->government_benefits = $request['government_benefits'];


            
         if (!empty($request->hasFile('about_talends_image'))) {
                $about_talends_image = $request->file('about_talends_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$about_talends_image->getClientOriginalName();
                $request->about_talends_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }


            if (!empty($request->hasFile('talends_project_image'))) {
                $talends_project_image = $request->file('talends_project_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_project_image->getClientOriginalName();
                $request->talends_project_image->move($new_path, $imageName);
                $this->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_project_image = null;
            }


            if (!empty($request->hasFile('talends_work_image'))) {
                $talends_work_image = $request->file('talends_work_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_work_image->getClientOriginalName();
                $request->talends_work_image->move($new_path, $imageName);
                $this->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_work_image = null;
            }


            
            if (!empty($request->hasFile('talends_payment_image'))) {
                $talends_payment_image = $request->file('talends_payment_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_payment_image->getClientOriginalName();
                $request->talends_payment_image->move($new_path, $imageName);
                $this->talends_payment_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_payment_image = null;
            }


            if (!empty($request->hasFile('talends_support_image'))) {
                $talends_support_image = $request->file('talends_support_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_support_image->getClientOriginalName();
                $request->talends_support_image->move($new_path, $imageName);
                $this->talends_support_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_support_image = null;
            }


            if (!empty($request->hasFile('short_term_project_image'))) {
                $short_term_project_image = $request->file('short_term_project_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$short_term_project_image->getClientOriginalName();
                $request->short_term_project_image->move($new_path, $imageName);
                $this->short_term_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->short_term_project_image = null;
            }


            if (!empty($request->hasFile('recurring_engagements_image'))) {
                $recurring_engagements_image = $request->file('recurring_engagements_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$recurring_engagements_image->getClientOriginalName();
                $request->recurring_engagements_image->move($new_path, $imageName);
                $this->recurring_engagements_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->recurring_engagements_image = null;
            }


            
            if (!empty($request->hasFile('long_term_work_image'))) {
                $long_term_work_image = $request->file('long_term_work_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$long_term_work_image->getClientOriginalName();
                $request->long_term_work_image->move($new_path, $imageName);
                $this->long_term_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->long_term_work_image = null;
            }
            
            
          

           
            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'About Talends Record Created';
            return $json;
        }
    }

    public function updateAboutTalends($request, $id)
    {

        if (!empty($request)) {
            $about_talends = self::find($id);
         
            $about_talends->banner_description = $request['banner_description'];
            $about_talends->features_text = $request['features_text'];
            $about_talends->services_description = $request['services_description'];
            $about_talends->project_description = $request['project_description'];
            $about_talends->work_description = $request['work_description'];
            $about_talends->payment_description = $request['payment_description'];
            $about_talends->support_description = $request['support_description'];


            $about_talends->freelancer_benefits = $request['freelancer_benefits'];
            $about_talends->internees_benefits = $request['internees_benefits'];
            $about_talends->agencies_benefits = $request['agencies_benefits'];
            $about_talends->government_benefits = $request['government_benefits'];
                

            if (!empty($request->hasFile('about_talends_image'))) {
                $about_talends_image = $request->file('about_talends_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_about_talends_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_about_talends_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$about_talends_image->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->about_talends_image->move($new_path, $imageName);
                $about_talends->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->about_talends_image = $request->hidden_about_talends_image;
            }


            if (!empty($request->hasFile('talends_project_image'))) {
                $talends_project_image = $request->file('talends_project_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_project_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_project_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_project_image->getClientOriginalName();
                $request->talends_project_image->move($new_path, $imageName);
                $about_talends->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->talends_project_image = $request->hidden_talends_project_image;
            }


            if (!empty($request->hasFile('talends_work_image'))) {
                $talends_work_image = $request->file('talends_work_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_work_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_work_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_work_image->getClientOriginalName();
                $request->talends_work_image->move($new_path, $imageName);
                $about_talends->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->talends_work_image = $request->hidden_talends_work_image;
            }


            
            if (!empty($request->hasFile('talends_payment_image'))) {
                $talends_payment_image = $request->file('talends_payment_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_payment_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_payment_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_payment_image->getClientOriginalName();
                $request->talends_payment_image->move($new_path, $imageName);
                $about_talends->talends_payment_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->talends_payment_image = $request->hidden_talends_payment_image;
            }


            if (!empty($request->hasFile('talends_support_image'))) {
                $talends_support_image = $request->file('talends_support_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_support_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_talends_support_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$talends_support_image->getClientOriginalName();
                $request->talends_support_image->move($new_path, $imageName);
                $about_talends->talends_support_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->talends_support_image = $request->hidden_talends_support_image;
            }


            if (!empty($request->hasFile('short_term_project_image'))) {
                $short_term_project_image = $request->file('short_term_project_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_short_term_project_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_short_term_project_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$short_term_project_image->getClientOriginalName();
                $request->short_term_project_image->move($new_path, $imageName);
                $about_talends->short_term_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->short_term_project_image =  $request->hidden_short_term_project_image;
            }


            if (!empty($request->hasFile('recurring_engagements_image'))) {
                $recurring_engagements_image = $request->file('recurring_engagements_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_recurring_engagements_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_recurring_engagements_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$recurring_engagements_image->getClientOriginalName();
                $request->recurring_engagements_image->move($new_path, $imageName);
                $about_talends->recurring_engagements_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->recurring_engagements_image = $request->hidden_recurring_engagements_image;
            }


            
            if (!empty($request->hasFile('long_term_work_image'))) {
                $long_term_work_image = $request->file('long_term_work_image');


                if (file_exists(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_long_term_work_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/about_talends' . '/' . $request->hidden_long_term_work_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/about_talends';
                $imageName = time().'.'.$long_term_work_image->getClientOriginalName();
                $request->long_term_work_image->move($new_path, $imageName);
                $about_talends->long_term_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->long_term_work_image = $request->hidden_long_term_work_image;
            }
            
         

            return $about_talends->save();
        }
    }


    public function saveHowActuallyWork($request)
    {

            if (!empty($request)) {
            
            $this->page_type = 'footer-how-work';
            
            $this->banner_description = $request['footer_image1_description'];
            $this->features_text = $request['footer_image2_description'];
            $this->services_description = $request['footer_image3_description'];
         
 
             if (!empty($request->hasFile('footer_image1'))) {
                $footer_image1 = $request->file('footer_image1');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$footer_image1->getClientOriginalName();
                $request->footer_image1->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }


            if (!empty($request->hasFile('footer_image2'))) {
                $footer_image2 = $request->file('footer_image2');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$footer_image2->getClientOriginalName();
                $request->footer_image2->move($new_path, $imageName);
                $this->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_project_image = null;
            }


            if (!empty($request->hasFile('footer_image3'))) {
                $footer_image3 = $request->file('footer_image3');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$footer_image3->getClientOriginalName();
                $request->footer_image3->move($new_path, $imageName);
                $this->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_work_image = null;
            }

            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'About Talends Record Created';
            return $json;
        }
    }

    public function updateHowActuallyWork($request, $id)
    {

        if (!empty($request)) {
            $footer_how_work = self::find($id);
         
            $footer_how_work->banner_description = $request['footer_image1_description'];
            $footer_how_work->features_text = $request['footer_image2_description'];
            $footer_how_work->services_description = $request['footer_image3_description'];
          
            
            if (!empty($request->hasFile('footer_image1'))) {
                $footer_image1 = $request->file('footer_image1');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_about_talends_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_about_talends_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$footer_image1->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->footer_image1->move($new_path, $imageName);
                $footer_how_work->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $footer_how_work->about_talends_image = $request->hidden_about_talends_image;
            }


            if (!empty($request->hasFile('footer_image2'))) {
                $footer_image2 = $request->file('footer_image2');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_talends_project_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_talends_project_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$footer_image2->getClientOriginalName();
                $request->footer_image2->move($new_path, $imageName);
                $footer_how_work->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $footer_how_work->talends_project_image = $request->hidden_talends_project_image;
            }


            if (!empty($request->hasFile('footer_image3'))) {
                $footer_image3 = $request->file('footer_image3');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_talends_work_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_talends_work_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$footer_image3->getClientOriginalName();
                $request->footer_image3->move($new_path, $imageName);
                $footer_how_work->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $footer_how_work->talends_work_image = $request->hidden_talends_work_image;
            }


            return $footer_how_work->save();
        }
    }

    public function saveJoinCommunity($request)
    {

            if (!empty($request)) {
            
            $this->page_type = 'join_community';
            
            $this->banner_description = $request['banner_description'];
         
 
             if (!empty($request->hasFile('about_talends_image'))) {
                $about_talends_image = $request->file('about_talends_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$about_talends_image->getClientOriginalName();
                $request->about_talends_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }

            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'About Talends Record Created';
            return $json;
        }
    }


    public function updateJoinCommunity($request, $id)
    {

        if (!empty($request)) {
            $footer_how_work = self::find($id);
         
            $footer_how_work->banner_description = $request['banner_description'];
         
            
            if (!empty($request->hasFile('about_talends_image'))) {
                $about_talends_image = $request->file('about_talends_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_about_talends_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/footer' . '/' . $request->hidden_about_talends_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/footer';
                $imageName = time().'.'.$about_talends_image->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->about_talends_image->move($new_path, $imageName);
                $footer_how_work->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $footer_how_work->about_talends_image = $request->hidden_about_talends_image;
            }


            return $footer_how_work->save();
        }
    }



}
