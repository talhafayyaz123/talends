<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class CompanyExpertise extends Model
{
    use HasFactory;

    protected $table='company_expertise';

    protected $fillable = array(
        'user_id',
        'description'
    );


    public static function saveCompanyExpertise($request)
    {
        $json = array();
        $menu = $request['expertise'];

       
        if (!empty($menu)) {

            foreach ($menu as $key => $value) {
                if (($value['title'] == null || $value['total_developers'] == null || $value['project_cost'] == null || $value['description'] == null)) {
                    $json['type'] = 'error';
                    return $json;
                }
            }
            
            $existing_menu_item=DB::table('company_expertise')->where('user_id', '=', auth()->user()->id)->first();
            $portfolio_image = null;
            if(empty($existing_menu_item)){
                
                if (!empty($request->hasFile('portfolio_image'))) {
                  
                    $portfolio_image = $request->file('portfolio_image');
            
                    $new_path = Helper::PublicPath().'/uploads/company';
                    $imageName = time().'.'.$portfolio_image->getClientOriginalName();
                    $request->portfolio_image->move($new_path, $imageName);
                    $portfolio_image = filter_var($imageName, FILTER_SANITIZE_STRING);
    
                }

                if (!empty($request->hasFile('portfolio_image_2'))) {
                  
                    $portfolio_image_2 = $request->file('portfolio_image_2');
            
                    $new_path = Helper::PublicPath().'/uploads/company';
                    $imageName = time().'.'.$portfolio_image_2->getClientOriginalName();
                    $request->portfolio_image_2->move($new_path, $imageName);
                    $portfolio_image_2 = filter_var($imageName, FILTER_SANITIZE_STRING);
    
                }


                if (!empty($request->hasFile('portfolio_image_3'))) {
                  
                    $portfolio_image_3 = $request->file('portfolio_image_3');
            
                    $new_path = Helper::PublicPath().'/uploads/company';
                    $imageName = time().'.'.$portfolio_image_3->getClientOriginalName();
                    $request->portfolio_image_3->move($new_path, $imageName);
                    $portfolio_image_3 = filter_var($imageName, FILTER_SANITIZE_STRING);
    
                }

            }else{

                if (!empty($request->hasFile('portfolio_image'))) {
                    $portfolio_image = $request->file('portfolio_image');
    
                    if ($request->hidden_portfolio_image && file_exists(Helper::PublicPath().'/uploads/company' . '/' . $request->hidden_portfolio_image)) {
                        unlink(Helper::PublicPath().'/uploads/company' . '/' . $request->hidden_portfolio_image);               
                    }
            
                    $new_path = Helper::PublicPath().'/uploads/company';
                    $imageName = time().'.'.$portfolio_image->getClientOriginalName();
                    $request->portfolio_image->move($new_path, $imageName);
                    $portfolio_image = filter_var($imageName, FILTER_SANITIZE_STRING);
    
                } else {
                    $portfolio_image = $request->hidden_portfolio_image;
                }



                if (!empty($request->hasFile('portfolio_image_2'))) {
                    $portfolio_image_2 = $request->file('portfolio_image_2');
    
                    if ($request->hidden_portfolio_image_2 && file_exists(Helper::PublicPath().'/uploads/company' . '/' . $request->hidden_portfolio_image_2)) {
                        unlink(Helper::PublicPath().'/uploads/company' . '/' . $request->hidden_portfolio_image_2);               
                    }
            
                    $new_path = Helper::PublicPath().'/uploads/company';
                    $imageName = time().'.'.$portfolio_image_2->getClientOriginalName();
                    $request->portfolio_image_2->move($new_path, $imageName);
                    $portfolio_image_2 = filter_var($imageName, FILTER_SANITIZE_STRING);
    
                } else {
                    $portfolio_image_2 = $request->hidden_portfolio_image_2;
                }



                if (!empty($request->hasFile('portfolio_image_3'))) {
                    $portfolio_image_3 = $request->file('portfolio_image_3');
    
                    if ($request->hidden_portfolio_image_3 && file_exists(Helper::PublicPath().'/uploads/company' . '/' . $request->hidden_portfolio_image_3)) {
                        unlink(Helper::PublicPath().'/uploads/company' . '/' . $request->hidden_portfolio_image_3);               
                    }
            
                    $new_path = Helper::PublicPath().'/uploads/company';
                    $imageName = time().'.'.$portfolio_image_3->getClientOriginalName();
                    $request->portfolio_image_3->move($new_path, $imageName);
                    $portfolio_image_3 = filter_var($imageName, FILTER_SANITIZE_STRING);
    
                } else {
                    $portfolio_image_3 = $request->hidden_portfolio_image_3;
                }


               

            }


    
            if (!empty($existing_menu_item)) {
                DB::table('company_expertise')->where('user_id', '=', auth()->user()->id)->delete();
            }
            DB::table('company_expertise')->insert(
                [
                    'user_id' => auth()->user()->id, 'description' => serialize($menu),
                    'portfolio_detail' => $request['portfolio_detail'],'portfolio_image' =>  $portfolio_image,
                    'portfolio_detail_2' => $request['portfolio_detail_2'],'portfolio_image_2' =>  $portfolio_image_2,
                    'portfolio_detail_3' => $request['portfolio_detail_3'],'portfolio_image_3' =>  $portfolio_image_3,

                    "created_at" => Carbon::now(), "updated_at" => Carbon::now()
                ]
            );
           
            $json['type'] = 'success';
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }
}
