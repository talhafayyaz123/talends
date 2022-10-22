<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TialAgencyTokens extends Model
{
    use HasFactory;
    protected $table='tial_agency_tokens';
    protected $fillable = array('url_token', 'status');

    public function saveLink($request)
    {
        if (!empty($request)) {
          $this->url_token = $request['url_token'];
           $this->status = 'active';
           $this->save();

            $json['type'] = 'success';
            $json['message'] = 'Link Generated Successfully.';
            return $json;
        }
    }

    
    public function updateLink($request,$id)
    {
        if (!empty($request)) {
           $status = $request['status'];
           $linlk=$this::find($id);
           $linlk->status=$status;
           $linlk->update();            
            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_created');
            return $json;
        }
    }

}
