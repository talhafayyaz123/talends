<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPayments;
use App\UserTransactions;

class UserPaymentController extends Controller
{
    public function getPayments(Request $request){
        
        $user_transections=UserPayments::with('userTransactions','user')->latest()->paginate(6);
       
        return view(

            'back-end.admin.payments.index',
        
            compact('user_transections')
        
        );
    }

    public function getPaymentDetail($id){
        
        $user_transections=UserTransactions::with('user')->where('user_id',$id)->latest()->paginate(6);
       
        return view(

            'back-end.admin.payments.detail',
        
            compact('user_transections')
        
        );
    }
}
