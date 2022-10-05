<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CompanyDetail extends Model
{
    use HasFactory;
    protected $table='company_details';
    protected $fillable = array(
        'user_id',
        'company_name',
        'detail',
        'portfolio',
        'team_detail',
        'experience',
        'technology_experience',
        'hourly_rate',
        'total_earned',
        'total_hours',
        'total_jobs',
        'last_work_date',
        'membership_date',
        'office_location',
        'work_history',

    );

    public static function saveCompanyWorkDetail($request)
    {
        $json = array();
       
       
        if (!empty($request)) {

            $existing_menu_item=DB::table('company_details')->where('user_id', '=', auth()->user()->id)->first();
               
            if (!empty($existing_menu_item)) {
               
                DB::table('company_details')->where('user_id', '=', auth()->user()->id)->update(
                    [

                        'company_name' => $request['company_name'],
                        'total_earned' => $request['total_earned'],
                        'total_hours' => $request['total_hours'],
                        'total_jobs' => $request['total_jobs'],
                        'last_work_date' => $request['last_work_date'],
                        'membership_date' => $request['membership_date'],
                        'office_location' => $request['office_location'],
                        'detail' => $request['detail'],
                        'portfolio' => $request['portfolio'],
                        'team_detail' => $request['team_detail'],
                        'experience' => $request['experience'],
                        'technology_experience' => $request['technology_experience'], 
                        
                    ]
                );
            }else{
                DB::table('company_details')->insert(
                    [
                        'user_id' => auth()->user()->id, 
                        'company_name' => $request['company_name'],
                        'total_earned' => $request['total_earned'],
                        'total_hours' => $request['total_hours'],
                        'total_jobs' => $request['total_jobs'],
                        'last_work_date' => $request['last_work_date'],
                        'membership_date' => $request['membership_date'],
                        'office_location' => $request['office_location'],
                        'detail' => $request['detail'],
                        'portfolio' => $request['portfolio'],
                        'team_detail' => $request['team_detail'],
                        'experience' => $request['experience'],
                        'technology_experience' => $request['technology_experience'],
                        "created_at" => Carbon::now(), 
                        "updated_at" => Carbon::now()
                    ]
                );
            }
            

            
           
            $json['type'] = 'success';
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }
}
