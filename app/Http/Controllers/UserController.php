<?php

namespace App\Http\Controllers;
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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    


    public function profile(Request $request, $id){
        if(Session::has('loginId')){
            
            $data1 = User::all()->first();
            $data = SliderModel::all()->first();
            $data2 = About::all()->first();
            $data3 = Specialitem::all();
            $data4 = Fullmenu::all()->first();
            $data5 = Testimonial::all();
            $data6 = Gallery::all()->first();
            $data7 = Contact::all()->first();
            $data8 = TimeModel::all();
        
            $user=User::where('id','=',Session('loginId'))->first();
            $count = Cart::where('phone',$user->phone)->count();
            $data9 = Cart::where('phone',$user->phone)->get();
           
           return view("user.profile", compact("data9","count","data","data1","data2","data3","data4","data5","data6","data7","data8","user"));
        }
    }
}
