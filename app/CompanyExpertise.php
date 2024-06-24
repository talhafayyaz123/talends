<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;


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

       
            $existing_menu_item=DB::table('company_expertise')->where('user_id', '=', auth()->user()->id)->first();
            $portfolio_image = null;
            
            if(empty($existing_menu_item)){
            
                if (!empty($request->hasFile('portfolio_image'))) {
                  
                    $portfolio_image = $request->file('portfolio_image');

                    $s3 = \Storage::disk('s3');
        
                    $file_name = time().'.'.$portfolio_image->getClientOriginalName();
        
                    $s3filePath = 'uploads/company/' . $file_name;
        
                    $s3->put($s3filePath, file_get_contents($portfolio_image));

    
                    $portfolio_image = filter_var($file_name, FILTER_SANITIZE_STRING);
    
                }else{
                    $portfolio_image = NULL;
                }

                if (!empty($request->hasFile('portfolio_image_2'))) {
                  
                    $portfolio_image_2 = $request->file('portfolio_image_2');

                    
                    $s3 = \Storage::disk('s3');
        
                    $file_name = time().'.'.$portfolio_image_2->getClientOriginalName();
        
                    $s3filePath = 'uploads/company/' . $file_name;
        
                    $s3->put($s3filePath, file_get_contents($portfolio_image_2));

                    $portfolio_image_2 = filter_var($file_name, FILTER_SANITIZE_STRING);
    
                }else{
                    $portfolio_image_2=NULL;
                }


                if (!empty($request->hasFile('portfolio_image_3'))) {
                  
                    $portfolio_image_3 = $request->file('portfolio_image_3');
            
                    $s3 = \Storage::disk('s3');
                            
                    $file_name =time().'.'.$portfolio_image_3->getClientOriginalName();

                    $s3filePath = 'uploads/company/' . $file_name;

                    $s3->put($s3filePath, file_get_contents($portfolio_image_3));


                    $portfolio_image_3 = filter_var($file_name, FILTER_SANITIZE_STRING);
    
                }else{
                    $portfolio_image_3=NULL;
                }

            }else{

                if (!empty($request->hasFile('portfolio_image'))) {
                    $portfolio_image = $request->file('portfolio_image');
    
                
                    if(isset($request->hidden_portfolio_image) && !empty($request->hidden_portfolio_image) ){
                        $file =$request->hidden_portfolio_image;
                         
                    if(Storage::disk('s3')->exists('uploads/company/'.$file)){
                      
                      Storage::disk('s3')->delete('uploads/company/'.$file); 
                      
                    } 
    
                    }

            
                   
                    $s3 = \Storage::disk('s3');
        
                    $file_name = time().'.'.$portfolio_image->getClientOriginalName();
        
                    $s3filePath = 'uploads/company/' . $file_name;
        
                    $s3->put($s3filePath, file_get_contents($portfolio_image));

                    $portfolio_image = filter_var($file_name, FILTER_SANITIZE_STRING);
    
                } else {
                    $portfolio_image = $request->hidden_portfolio_image;
                }



                if (!empty($request->hasFile('portfolio_image_2'))) {
                    $portfolio_image_2 = $request->file('portfolio_image_2');
    
                
                    if(isset($request->hidden_portfolio_image_2) && !empty($request->hidden_portfolio_image_2) ){
                        $file =$request->hidden_portfolio_image_2;
                         
                    if(Storage::disk('s3')->exists('uploads/company/'.$file)){
                      
                      Storage::disk('s3')->delete('uploads/company/'.$file); 
                      
                    } 
    
                    }
            
                    
                      
                    $s3 = \Storage::disk('s3');
        
                    $file_name = time().'.'.$portfolio_image_2->getClientOriginalName();
        
                    $s3filePath = 'uploads/company/' . $file_name;
        
                    $s3->put($s3filePath, file_get_contents($portfolio_image_2));

                    $portfolio_image_2 = filter_var($file_name, FILTER_SANITIZE_STRING);
                    
    
                } else {
                    $portfolio_image_2 = $request->hidden_portfolio_image_2;
                }



                if (!empty($request->hasFile('portfolio_image_3'))) {
                    $portfolio_image_3 = $request->file('portfolio_image_3');
    
                  

                    if(isset($request->hidden_portfolio_image_3) && !empty($request->hidden_portfolio_image_3) ){
                        $file =$request->hidden_portfolio_image_3;
                         
                    if(Storage::disk('s3')->exists('uploads/company/'.$file)){
                      
                      Storage::disk('s3')->delete('uploads/company/'.$file); 
                      
                    } 
    
                    }
            
                    
                    $s3 = \Storage::disk('s3');
                            
                    $file_name =time().'.'.$portfolio_image_3->getClientOriginalName();

                    $s3filePath = 'uploads/company/' . $file_name;

                    $s3->put($s3filePath, file_get_contents($portfolio_image_3));



                    $portfolio_image_3 = filter_var($file_name, FILTER_SANITIZE_STRING);
    
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
        
    }
}
