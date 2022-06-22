<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fullmenu;

class FullmenuController extends Controller
{
    public function fullmenu(){
        return view('admin.full_menu.addabout');
    }
    public function addfullmenu(Request $request){
        $data = new Fullmenu;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('fullmenuimage',$imagename);
        $data ->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
       
    }

    public function viewfullmenu(){
        $data = Fullmenu::all();
        return view("admin.full_menu.viewfullmenu",compact("data"));
    }
    public function deletefullmenu($id){
        $data=Fullmenu::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editfullmenu($id){
        $data=Fullmenu::find($id);
        return view("admin.full_menu.editfullmenu",compact("data"));
    }
    public function updatefullmenu(Request $request,$id){
        $data=Fullmenu::find($id);
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('fullmenuimage',$imagename);
        $data ->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
   
}

