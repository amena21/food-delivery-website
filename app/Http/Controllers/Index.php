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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Session;

class Index extends Controller
{
    public function viewindex(Request $request, $id){
        if(Session::has('loginId')){
            
            $data1 = User::all()->first();
            $data = SliderModel::all()->first();
            $data2 = About::all()->first();
            $data3 = Specialitem::all();
            $data4 = Fullmenu::all();
            $data5 = Testimonial::all();
            $data6 = Gallery::all();
            $data7 = Contact::all()->first();
            $data8 = TimeModel::all();
        
            $user=User::where('id','=',Session('loginId'))->first();
            $count = Cart::where('phone',$user->phone)->count();
            $data9 = Cart::where('phone',$user->phone)->get();
           
           return view("index", compact("data9","count","data","data1","data2","data3","data4","data5","data6","data7","data8"));
        }
    }

    public function headmenu(){
        $data1 = User::all()->first();
         $data = SliderModel::all()->first();
       
         $data2 = About::all()->first();
         $data3 = Specialitem::all();
         $data4 = Fullmenu::all();

         $data5 = Testimonial::all();
         $data6 = Gallery::all();
         $data7 = Contact::all()->first();
         $data8 = TimeModel::all();
         return view("welcome",compact("data","data1","data2","data3","data4","data5","data6","data7","data8"));
     }

    public function viewfullmenu(){
       
       
        $data2 = About::all();
      
        $data4 = Fullmenu::all();
        
      
        $data6 = Gallery::all()->first();
        $data7 = Contact::all()->first();
        $data8 = TimeModel::all();
        return view("fullmenu",compact("data2","data4","data6","data7","data8"));
    }
    public function viewabout(Request $request ,$id){

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
           
           return view("about", compact("data9","count","data","data1","data2","data3","data4","data5","data6","data7","data8"));
        }
     
       
    }
    public function viewmenu(Request $request, $id){
       

        if(Session::has('loginId')){
            
            $data1 = User::all()->first();
            $data = SliderModel::all()->first();
            $data2 = About::all()->first();
            $data3 = Specialitem::all();
            $data4 = Fullmenu::all();
            $data5 = Testimonial::all();
            $data6 = Gallery::all()->first();
            $data7 = Contact::all()->first();
            $data8 = TimeModel::all();
        
            $user=User::where('id','=',Session('loginId'))->first();
            $count = Cart::where('phone',$user->phone)->count();
            $data9 = Cart::where('phone',$user->phone)->get();
           
           return view("menu", compact("data9","count","data","data1","data2","data3","data4","data5","data6","data7","data8"));
        }
    }
    public function viewcontact(Request $request, $id){

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
           
           return view("contact", compact("data9","count","data","data1","data2","data3","data4","data5","data6","data7","data8"));
        }
     
    }
    public function viewcontactus(){
        
        $data2 = About::all()->first();
      
        $data4 = Fullmenu::all()->first();
      
      
        $data6 = Gallery::all()->first();
        $data7 = Contact::all()->first();
        $data8 = TimeModel::all();
        return view("contactus",compact("data2","data4","data6","data7","data8"));
    }
    
}
