<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class RegisteredUserList extends Controller

{
    public function user(){
        $data=user::all();
        return view("admin.registereduser",compact("data"));
    }

    public function adminlogininfo(Request $request){
        
        // $data=$request->session()->get('id');
        // return view("admin.adminprofile",compact("data"));
        $data=user::where('email','admin@gmail.com')->first();
        return view("admin.adminprofile.adminprofile",compact("data"));

    }
    public function editadminprofile($id){
        $data=user::find($id);
        return view("admin.adminprofile.editadminprofile",compact("data"));
    }
    public function updateadminprofile(Request $request,$id){
        $data=user::find($id);
        // $image = $request ->image;
        // $imagename =time().'.'.$image->getClientOriginalExtension();
        // $request->image->move('adminprofileimage',$imagename);
        // $data ->image=$imagename;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password= Hash::make($request->password);
        $data->save();
        return redirect()->back();
    }


    
}


