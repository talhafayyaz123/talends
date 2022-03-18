<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

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
                if (($value['title'] == null || $value['total_developers'] == null || $value['project_cost'] == null)) {
                    $json['type'] = 'error';
                    return $json;
                }
            }
            
            $existing_menu_item=DB::table('company_expertise')->where('user_id', '=', auth()->user()->id)->first();
        
            if (!empty($existing_menu_item)) {
                DB::table('company_expertise')->where('user_id', '=', auth()->user()->id)->delete();
            }
            DB::table('company_expertise')->insert(
                [
                    'user_id' => auth()->user()->id, 'description' => serialize($menu)
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
