<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


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


    public function savesFindRightTalends($request)
    {

            if (!empty($request)) {
            
            $this->page_type = 'find-right-talends';
            $this->banner_description = $request['banner_description'];
            $this->features_text = $request['features_text'];
            $this->services_description = $request['services_description'];
            $this->project_description = $request['project_description'];
            $this->work_description = $request['work_description'];
            $this->support_description = $request['support_description'];
            $this->freelancer_benefits = $request['freelancer_benefits'];
            $this->internees_benefits = $request['title'];


            
         if (!empty($request->hasFile('about_talends_image'))) {
                $about_talends_image = $request->file('about_talends_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$about_talends_image->getClientOriginalName();
                $request->about_talends_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }


            if (!empty($request->hasFile('talends_project_image'))) {
                $talends_project_image = $request->file('talends_project_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$talends_project_image->getClientOriginalName();
                $request->talends_project_image->move($new_path, $imageName);
                $this->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_project_image = null;
            }


            if (!empty($request->hasFile('talends_work_image'))) {
                $talends_work_image = $request->file('talends_work_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$talends_work_image->getClientOriginalName();
                $request->talends_work_image->move($new_path, $imageName);
                $this->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_work_image = null;
            }




            if (!empty($request->hasFile('talends_support_image'))) {
                $talends_support_image = $request->file('talends_support_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$talends_support_image->getClientOriginalName();
                $request->talends_support_image->move($new_path, $imageName);
                $this->talends_support_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_support_image = null;
            }


            if (!empty($request->hasFile('short_term_project_image'))) {
                $short_term_project_image = $request->file('short_term_project_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$short_term_project_image->getClientOriginalName();
                $request->short_term_project_image->move($new_path, $imageName);
                $this->short_term_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->short_term_project_image = null;
            }


            if (!empty($request->hasFile('recurring_engagements_image'))) {
                $recurring_engagements_image = $request->file('recurring_engagements_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$recurring_engagements_image->getClientOriginalName();
                $request->recurring_engagements_image->move($new_path, $imageName);
                $this->recurring_engagements_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->recurring_engagements_image = null;
            }


            
            if (!empty($request->hasFile('long_term_work_image'))) {
                $long_term_work_image = $request->file('long_term_work_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
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
            $this->project_description = $request['title'];

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
            $footer_how_work->project_description = $request['title'];

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

    public function saveBannerSettings($request)
    {

            if (!empty($request)) {
            
            $this->page_type = 'banner_settings';
            
            $this->banner_description = $request['banner_description'];
            $this->features_text = $request['internship_description'];
            $this->services_description = $request['internship_detail'];
         

             if (!empty($request->hasFile('banner_image'))) {
                $banner_image = $request->file('banner_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$banner_image->getClientOriginalName();
                $request->banner_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }


            if (!empty($request->hasFile('internship_image'))) {
                $internship_image = $request->file('internship_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$internship_image->getClientOriginalName();
                $request->internship_image->move($new_path, $imageName);
                $this->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_project_image = null;
            }


            if (!empty($request->hasFile('internship_detail_image'))) {
                $internship_detail_image = $request->file('internship_detail_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$internship_detail_image->getClientOriginalName();
                $request->internship_detail_image->move($new_path, $imageName);
                $this->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->talends_work_image = null;
            }

            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'Banner Settings Record Created';
            return $json;
        }
    }

    public function updateBannerSettings($request, $id)
    {

        if (!empty($request)) {
            $footer_how_work = self::find($id);
         
            $footer_how_work->banner_description = $request['banner_description'];
            $footer_how_work->features_text = $request['internship_description'];
            $footer_how_work->services_description = $request['internship_detail'];
          
            
            if (!empty($request->hasFile('banner_image'))) {
                $banner_image = $request->file('banner_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_about_talends_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_about_talends_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$banner_image->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->banner_image->move($new_path, $imageName);
                $footer_how_work->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $footer_how_work->about_talends_image = $request->hidden_about_talends_image;
            }


            if (!empty($request->hasFile('internship_image'))) {
                $internship_image = $request->file('internship_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_talends_project_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_talends_project_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$internship_image->getClientOriginalName();
                $request->internship_image->move($new_path, $imageName);
                $footer_how_work->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $footer_how_work->talends_project_image = $request->hidden_talends_project_image;
            }


            if (!empty($request->hasFile('internship_detail_image'))) {
                $internship_detail_image = $request->file('internship_detail_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_internship_detail_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_internship_detail_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$internship_detail_image->getClientOriginalName();
                $request->internship_detail_image->move($new_path, $imageName);
                $footer_how_work->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $footer_how_work->talends_work_image = $request->hidden_internship_detail_image;
            }


            return $footer_how_work->save();
        }
    }

    public function saveRightOpportunitySettings($request)
    {

            if (!empty($request)) {
            
             self::where('page_type','find_right_opportunity')->delete();
            

            $this->page_type = 'find_right_opportunity';
            
            $this->banner_description = $request['opportunity_heading1'];
            $this->features_text = $request['opportunity_heading2'];
            $this->services_description = $request['opportunity_heading3'];
            $this->project_description = $request['main_heading'];            
        
            $this->save();

            $json['type'] = 'success';
            $json['message'] = 'Find Opportunity Settings Record Created';
            return $json;
        }
    }


    public function storeTeamOnDemandSettings($request)
    {

            if (!empty($request)) {
                      
            if($request->team_type=='update'){
                self::where('page_type','team_on_demand')->delete();
            }
            $this->page_type = 'team_on_demand';
            $this->work_description = $request['title'];
            
            $this->banner_description = $request['quality_description1'];
            $this->features_text = $request['quality_description2'];
            $this->services_description = $request['quality_description3'];
            $this->project_description = $request['quality_description4'];
         
            if($request->team_type=='add'){
             if (!empty($request->hasFile('banner_image'))) {
                $banner_image = $request->file('banner_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$banner_image->getClientOriginalName();
                $request->banner_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }

        }else{
           
            
            if (!empty($request->hasFile('banner_image'))) {
                $banner_image = $request->file('banner_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_about_talends_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_about_talends_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$banner_image->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->banner_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = $request->hidden_about_talends_image;
            }



        }


            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'Team On Demand Settings Record Created';
            return $json;
        }
    }

    public function storeWhyChooseTalendsSettings($request)
    {

            if (!empty($request)) {
                      
            if($request->form_type=='update'){
                self::where('page_type','why_choose_talends')->delete();
            }
            $this->page_type = 'why_choose_talends';
            $this->freelancer_benefits = $request['main_heading'];

            $this->banner_description = $request['title1'];
            $this->features_text = $request['title2'];
            $this->services_description = $request['title3'];
            $this->project_description = $request['title4'];
            $this->work_description = $request['title5'];
         
            if($request->form_type=='add'){
             if (!empty($request->hasFile('title1_image'))) {
                $title1_image = $request->file('title1_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$title1_image->getClientOriginalName();
                $request->title1_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }

        }else{
           
            
            if (!empty($request->hasFile('title1_image'))) {
                $title1_image = $request->file('title1_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title1_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title1_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$title1_image->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->title1_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = $request->hidden_title1_image;
            }



        }
           ////////////////////////////////////////////

           if($request->form_type=='add'){
            if (!empty($request->hasFile('title2_image'))) {
               $title2_image = $request->file('title2_image');
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title2_image->getClientOriginalName();
               $request->title2_image->move($new_path, $imageName);
               $this->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_project_image = null;
           }

       }else{
          
           
           if (!empty($request->hasFile('title2_image'))) {
               $title2_image = $request->file('title2_image');
               if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title2_image)) {
                   unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title2_image);               
               }
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title2_image->getClientOriginalName();
               $imageName=str_replace(' ','_',$imageName);
             
               $request->title2_image->move($new_path, $imageName);
               $this->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_project_image = $request->hidden_title2_image;
           }



       }

           ////////////////////////////////////////


           if($request->form_type=='add'){
            if (!empty($request->hasFile('title3_image'))) {
               $title3_image = $request->file('title3_image');
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title3_image->getClientOriginalName();
               $request->title3_image->move($new_path, $imageName);
               $this->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_work_image = null;
           }

       }else{
          
           
           if (!empty($request->hasFile('title3_image'))) {
               $title3_image = $request->file('title3_image');
               if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title3_image)) {
                   unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title3_image);               
               }
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title3_image->getClientOriginalName();
               $imageName=str_replace(' ','_',$imageName);
             
               $request->title3_image->move($new_path, $imageName);
               $this->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_work_image = $request->hidden_title3_image;
           }



       }
           ///////////////////////////////
      
           if($request->form_type=='add'){
            if (!empty($request->hasFile('title4_image'))) {
               $title4_image = $request->file('title4_image');
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title4_image->getClientOriginalName();
               $request->title4_image->move($new_path, $imageName);
               $this->talends_payment_image = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_payment_image = null;
           }

       }else{
          
           
           if (!empty($request->hasFile('title4_image'))) {
               $title4_image = $request->file('title4_image');
               if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title4_image)) {
                   unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title4_image);               
               }
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title4_image->getClientOriginalName();
               $imageName=str_replace(' ','_',$imageName);
             
               $request->title4_image->move($new_path, $imageName);
               $this->talends_payment_image = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_payment_image = $request->hidden_title4_image;
           }



       }


           //////////////////////////


      
           if($request->form_type=='add'){
            if (!empty($request->hasFile('title5_image'))) {
               $title5_image = $request->file('title5_image');
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title5_image->getClientOriginalName();
               $request->title5_image->move($new_path, $imageName);
               $this->talends_support_image	 = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_support_image	 = null;
           }

       }else{
          
           
           if (!empty($request->hasFile('title5_image'))) {
               $title5_image = $request->file('title5_image');
               if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title5_image)) {
                   unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_title5_image);               
               }
       
               $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
               $imageName = time().'.'.$title5_image->getClientOriginalName();
               $imageName=str_replace(' ','_',$imageName);
             
               $request->title5_image->move($new_path, $imageName);
               $this->talends_support_image = filter_var($imageName, FILTER_SANITIZE_STRING);

           } else {
               $this->talends_support_image = $request->hidden_title5_image;
           }



       }
           /////////////////////
            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'Team On Demand Settings Record Created';
            return $json;
        }
    }

    public function saveTrustedBySettings($request)
    {

            if (!empty($request)) {
                      
            if($request->form_type=='update'){
                self::where('page_type','trusted_by')->delete();
            }
            $this->page_type = 'trusted_by';
            
         
            if($request->form_type=='add'){
             if (!empty($request->hasFile('trusted_by_image'))) {
                $trusted_by_image = $request->file('trusted_by_image');
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$trusted_by_image->getClientOriginalName();
                $request->trusted_by_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = null;
            }

        }else{
           
            
            if (!empty($request->hasFile('trusted_by_image'))) {
                $trusted_by_image = $request->file('trusted_by_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_about_talends_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/banners' . '/' . $request->hidden_about_talends_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/banners';
                $imageName = time().'.'.$trusted_by_image->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->trusted_by_image->move($new_path, $imageName);
                $this->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $this->about_talends_image = $request->hidden_about_talends_image;
            }



        }
           ////////////////////////////////////////////

            $this->save();
            $json['type'] = 'success';
            $json['message'] = 'Team On Demand Settings Record Created';
            return $json;
        }
    }



    public function updatefindRightTalends($request, $id)
    {

        if (!empty($request)) {
            $about_talends = self::find($id);
         
            $about_talends->banner_description = $request['banner_description'];
            $about_talends->features_text = $request['features_text'];
            $about_talends->services_description = $request['services_description'];
            $about_talends->project_description = $request['project_description'];
            $about_talends->work_description = $request['work_description'];
            $about_talends->support_description = $request['support_description'];
            $about_talends->freelancer_benefits = $request['freelancer_benefits'];
            $about_talends->internees_benefits = $request['title'];
               

            if (!empty($request->hasFile('about_talends_image'))) {
                $about_talends_image = $request->file('about_talends_image');
                if (file_exists(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_about_talends_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_about_talends_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$about_talends_image->getClientOriginalName();
                $imageName=str_replace(' ','_',$imageName);
              
                $request->about_talends_image->move($new_path, $imageName);
                $about_talends->about_talends_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->about_talends_image = $request->hidden_about_talends_image;
            }


            if (!empty($request->hasFile('talends_project_image'))) {
                $talends_project_image = $request->file('talends_project_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_talends_project_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_talends_project_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$talends_project_image->getClientOriginalName();
                $request->talends_project_image->move($new_path, $imageName);
                $about_talends->talends_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->talends_project_image = $request->hidden_talends_project_image;
            }


            if (!empty($request->hasFile('talends_work_image'))) {
                $talends_work_image = $request->file('talends_work_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_talends_work_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_talends_work_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$talends_work_image->getClientOriginalName();
                $request->talends_work_image->move($new_path, $imageName);
                $about_talends->talends_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->talends_work_image = $request->hidden_talends_work_image;
            }




            if (!empty($request->hasFile('talends_support_image'))) {
                $talends_support_image = $request->file('talends_support_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_talends_support_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_talends_support_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$talends_support_image->getClientOriginalName();
                $request->talends_support_image->move($new_path, $imageName);
                $about_talends->talends_support_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->talends_support_image = $request->hidden_talends_support_image;
            }


            if (!empty($request->hasFile('short_term_project_image'))) {
                $short_term_project_image = $request->file('short_term_project_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_short_term_project_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_short_term_project_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$short_term_project_image->getClientOriginalName();
                $request->short_term_project_image->move($new_path, $imageName);
                $about_talends->short_term_project_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->short_term_project_image =  $request->hidden_short_term_project_image;
            }


            if (!empty($request->hasFile('recurring_engagements_image'))) {
                $recurring_engagements_image = $request->file('recurring_engagements_image');

                if (file_exists(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_recurring_engagements_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_recurring_engagements_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$recurring_engagements_image->getClientOriginalName();
                $request->recurring_engagements_image->move($new_path, $imageName);
                $about_talends->recurring_engagements_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->recurring_engagements_image = $request->hidden_recurring_engagements_image;
            }


            
            if (!empty($request->hasFile('long_term_work_image'))) {
                $long_term_work_image = $request->file('long_term_work_image');


                if (file_exists(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_long_term_work_image)) {
                    unlink(Helper::PublicPath().'/uploads/home-pages/find-right-talends' . '/' . $request->hidden_long_term_work_image);               
                }
        
                $new_path = Helper::PublicPath().'/uploads/home-pages/find-right-talends';
                $imageName = time().'.'.$long_term_work_image->getClientOriginalName();
                $request->long_term_work_image->move($new_path, $imageName);
                $about_talends->long_term_work_image = filter_var($imageName, FILTER_SANITIZE_STRING);

            } else {
                $about_talends->long_term_work_image = $request->hidden_long_term_work_image;
            }
            
         

            return $about_talends->save();
        }
    }

}
