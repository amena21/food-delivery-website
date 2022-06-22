<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialitem;

class SpecialitemController extends Controller
{
    public function specialitem(){
        return view('admin.special_item.addspecialitem');
    }
    public function addspecialitem(Request $request){
        $data = new Specialitem;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('specialitemimage',$imagename);
        $data ->image=$imagename;

        $data->title=$request->title;
        $data->phone=$request->phone;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
       
    }

    public function viewspecialitem(){
        $data = Specialitem::all();
        return view("admin.special_item.viewspecialitem",compact("data"));
    }
    public function deletespecialitem($id){
        $data=Specialitem::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editspecialitem($id){
        $data=Specialitem::find($id);
        return view("admin.special_item.editspecialitem",compact("data"));
    }
    public function updatespecialitem(Request $request,$id){
        $data=Specialitem::find($id);
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('specialitemimage',$imagename);
        $data ->image=$imagename;

        $data->title=$request->title;
        $data->phone=$request->phone;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
  
}

