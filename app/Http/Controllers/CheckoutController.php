<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;




use App\Models\About;
use App\Models\Contact;
use App\Models\Specialitem;
use App\Models\Fullmenu;
use App\Models\User;
use App\Models\SliderModel;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\TimeModel;
use App\Models\Cart;

use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function viewcheckout(){
     
      
        $data1 = User::all()->first();
        //  $data3 = Specialitem::all();
         $data4 = Fullmenu::all()->first();
         
     
         $data6 = Gallery::all()->first();
         $data7 = Contact::all()->first();
         $data8 = TimeModel::all();
        $user=User::where('id','=',Session('loginId'))->first();
        $count = Cart::where('phone',$user->phone)->count();
        $data9 = Cart::where('phone',$user->phone)->get();
       
       
        return view("checkout", compact("data9","count","data7","data6","data8","data4","data1","user"));
    
}

}
