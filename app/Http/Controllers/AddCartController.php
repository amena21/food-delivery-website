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

class AddCartController extends Controller
{
    public function addcart(Request $request ,$id){
        if(Session::has('loginId')){
            $user = User::where('id','=',session('loginId'))->first();
            $item = Fullmenu::find($id);
            $cart = session()->get('cart');

            $cart[$id] = [
                
                'id' => $id,
                'name' => $user->name,
                'phone' => $user->phone,
                'address' => $user->address,
                'products_title'=>$item->title,
                'image' => $item->image,
                'price' => $item->price,
                'quantity' => $request->quantity,
                'grandtotal' => $item->price * $request->quantity

            ];
            
            // $request->session()->put('loginId',$user->id);
            // $request->session()->put('name',$user->name);
            // $request->session()->put('phone',$user->phone);
            // $request->session()->put('address',$user->address);
            // $request->session()->put('products_title',$item->products_title);
            // $request->session()->put('image',$item->image);
            // $request->session()->put('price',$item->price);
           
            
            // $cart->name=$user->name;
            // $cart->phone=$user->phone;
            // $cart->address=$user->address;
            // $cart->products_title=$item->title;
            
            // $cart->image=$item->image;


            
            // $cart->quantity=$request->quantity;
           session()->put('cart',$cart);
            // $food_price = $item->price;
            // $cart->price= $food_price *$cart->quantity ;

           

          
           

           
            return redirect('index/{id}')->with('success',"Food Added to Cart");
        }else{
            return redirect('');
        }

    }

    public function viewcart(){
      
        if(Session::has('loginId')){

         $data1 = User::where('id','=',Session('loginId'))->first();
         $cart = session::all();
        
        
         $data4 = Fullmenu::all()->first();
        
     
         $data6 = Gallery::all()->first();
         $data7 = Contact::all()->first();
         $data8 = TimeModel::all();
         
       
        $count = Cart::where('phone','=',session('phone'))->count();
        $data9 = Cart::where('phone','=',session('phone'))->get();
       
       
        return view("cart",compact("data9","count","data7","data6","data8","data4","data1","cart"));
        }else{
            return redirect('');
        }
    
}

public function deletecart(Request $request,$id)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return redirect()->back();

}

// public function deletecart($id){
//   $request ->session()->flush('id');
//    return redirect('cart');

//    Session::remove($id);
//    session()->flash('success','Item has been removed');
// }

// public function deletecart($id)
// {
//     $products = session('cart');
//     foreach($products as $key => $value)
//     if ($value['id'] == $id) 
//     {                
//         unset($products [$key]);            
//     }

//put back in session array without deleted item
// $request->session()->push('cart',$products);
//then you can redirect or whatever you need
// return redirect()->back();
// }

public function addmenucart(Request $request ,$id){
    if(Session::has('loginId')){
        $user=User::where('id','=',Session('loginId'))->first();
        $item=Fullmenu::find($id);
      
        
        $cart=new Cart;
        $cart->name=$user->name;
        $cart->phone=$user->phone;
        $cart->address=$user->address;
        $cart->products_title=$item->title;
        $cart->price=$item->price;
        $cart->quantity=$request->quantity;

        $cart->save();
        return redirect()->back()->with('message',"Food Added to Cart");
    }else{
        return redirect('');
    }

}
}
