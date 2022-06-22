<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

use Hash;
use Session;

class Authentication extends Controller
{
  
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected function redirectTo(){
    //     if(Auth()->user()->role == 1){
    //         return route('admin.dashboard');
    //     }elseif(Auth()->user() == 2){
    //         return route('user.dashboard');
    //     }
    // }



    // public function login(Request $request){
    //     $input =  $request->all();
    //    $this->validate($request,[

    //         'email'=>'required|email',
    //         'password'=>'required|min:5|max:12'
    //     ]);
    //     if(auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password']))){
    //         if(auth()->user()->role == 1){
    //             return redirect()->route('admin.dashboard');
    //         }
    //         elseif(auth()->user()->role == 2){
    //             return redirect()->route('user.dashboard');
    //         }
    //     }else{
    //         return redirect()->route('login')->with('error','Email and password are wrong');
    //     }

        public function loginUser(Request $request){
            $data1 = User::all()->first();
            $data = SliderModel::all()->first();
            // $data1 = Session::has('name');
            $data2 = About::all()->first();
            $data3 = Specialitem::all();
            $data4 = Fullmenu::all();
            // $array=array('fullmenus'=> $data4);
            $data5 = Testimonial::all();
            $data6 = Gallery::all();
            $data7 = Contact::all()->first();
            $data8 = TimeModel::all();
           
        
                    $request->validate([
            
                            'email'=>'required|email',
                        
                            'password'=>'required|min:5|max:12'
                                    ]);
                    $user = User::where('email','=',$request->email)->first();
                    
                    if($user){
                        if(Hash::check($request->password, $user->password)){
                      
                        $request->session()->put('loginId',$user->id);
                        $role = $user->role;
                        // $count = Cart::where('phone',$user->phone)->count();
                        $data9 = Cart::where('phone',$user->phone)->get();
                      

                        
                    //    if(Auth::id()){

                        // $role = DB::table('users')->get();
                        //  $role->role;
                        //   $role = Auth::users()->role ;
                        // $role = User::where('role','==','0');
                        if($role =='1'){
                            return view('admin.dashboard');
                        }else{
                            
                            return view("index", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9"));
                           
                        }
                        // }
                //   return redirect('dashboard');
                        }else{
                            return back()->with('fail','Password do not match.');
                        }

                    }else{

                        return back()->with('fail','This email is not registared.');
                    }
    
    }


    // protected function validator(array $data){
    //     return Validator::make($data,[
    //         'name'=>['required'],
    //          'email'=>['required','email','unique:users'],
    //          'password'=>['required','min:5','max:12','confirmed'],
    //     ]);
    // }
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'role' =>2,
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function registerUser(Request $request){
        $request->validate([

            'name'=>'required',
            'email'=>'required|email|unique:users|',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->phone = $request->phone;
        $user ->address = $request->address;
        $user ->password = Hash::make($request->password);
        $result = $user->save();

        if($result){
return back() ->with('success','you have registered successfully');
        }else{
return back() ->with('fail','something wrong');
        }
    }


    public function logout(Request $request){

        $request->session()->forget('id');
        $request->session()->forget('name');
        return redirect("");
    }


}
