<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlaceOrder;
use App\Models\Cart;
use App\Models\Fullmenu;
use App\Models\User;
use Session;



use App\Models\About;
use App\Models\Contact;
use App\Models\Specialitem;


use App\Models\SliderModel;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\TimeModel;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PlaceOrderController extends Controller
{
    public function placeorder(Request $request ,$id){
        if(Session::has('loginId')){
            $user=User::where('id','=',Session('loginId'))->first();    
            $cart = Session()->get('cart');





            $data1 = User::all()->first();
            $data = SliderModel::all()->first();
            $data2 = About::all()->first();
            $data3 = Specialitem::all();
            $data4 = Fullmenu::all()->first();
            $data5 = Testimonial::all();
            $data6 = Gallery::all()->first();
            $data7 = Contact::all()->first();
            $data8 = TimeModel::all();
            $order1 = placeorder::where('phone',$user->phone)->get();
          
         
            // $count = Cart::where('phone',$user->phone)->count();
           
            $data9 = placeorder::where('phone',$user->phone)->latest()->first(); 
          
        //    var_dump($user);
       

            $order= new PlaceOrder;
            $order->name = $request -> name;
            $order->address = $request -> address;
            $order->email = $request -> email;
            $order->phone = $request -> phone;
            $order->products_title = $request -> products_title;
            $order->quantity = $request -> quantity;
            $order->price = $request -> price;
            $order->status = 0;
           
            $order->totalprice=$request->totalprice;
            $order->pay_type=$request->pay_type;
            $order->tracking_no = 'order'.rand(1111,9999);
            $order->save();
          
            Session::forget('cart');
            return view('successfulorders',compact("data","data1","data2","data3","data4","data5","data6","data7","data8","order1","data9"));

            // $request->session()->flash('success',"Your Order has been placed successfully . Your Tracking No is : {{$order->tracking_no}} .");
       

          
          
      
        }else{
            return redirect('');
        }

    }
    // public function viewsuccessfulorders(Request $request ,$id){

    //     if(Session::has('loginId')){
    //         $user=User::where('id','=',Session('loginId'))->first();
    //         $data1 = User::all()->first();
    //         $data = SliderModel::all()->first();
    //         $data2 = About::all()->first();
    //         $data3 = Specialitem::all();
    //         $data4 = Fullmenu::all()->first();
    //         $data5 = Testimonial::all();
    //         $data6 = Gallery::all()->first();
    //         $data7 = Contact::all()->first();
    //         $data8 = TimeModel::all();
    //         $order = placeorder::where('phone',$user->phone)->get();
          
         
    //         // $count = Cart::where('phone',$user->phone)->count();
           
    //         $data9 = placeorder::where('phone',$user->phone)->latest()->first(); 
          
           
    //        return view("successfulorders", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","order","data9"));
     
    //     }
     
       
    // }

    public function vieworders(Request $request ,$id){

        if(Session::has('loginId')){
            $user=User::where('id','=',Session('loginId'))->first();
            $data1 = User::all()->first();
            $data = SliderModel::all()->first();
            $data2 = About::all()->first();
            $data3 = Specialitem::all();
            $data4 = Fullmenu::all()->first();
            $data5 = Testimonial::all();
            $data6 = Gallery::all()->first();
            $data7 = Contact::all()->first();
            $data8 = TimeModel::all();
            $order = placeorder::where('phone',$user->phone)->get();
          
         
            // $count = Cart::where('phone',$user->phone)->count();
           
            $data9 = placeorder::where('phone',$user->phone)->latest()->first();
           
           return view("orders", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","order","data9"));
     
        }
     
       
    }

    public function deleteorder($id){

        
        $data=placeorder::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletesuccessorder($id){

        
      
     
        // $count = Cart::where('phone',$user->phone)->count();
       
      
        $data=placeorder::find($id);
        $data->delete();
        return redirect('successfulorders');
    }

    public function viewadminorders(){
        $data = placeorder::all();
        return view("admin.orders.vieworders",compact("data"));
    }

    
    public function viewdeliveredorders(){
        $data = placeorder::where('status','3')->get();
        return view("admin.orders.vieworders",compact("data"));
    }

    public function editorders($id){
        $data=placeorder::find($id);
        return view("admin.orders.editorders",compact("data"));
    }
    public function updateorder(Request $request ,$id){
        $data = placeorder::find($id);
        $data->status = $request->input('status');
        $data->update();
        return redirect('orders')->with('status','Order Updated Successfully');
    }
    
 

}
