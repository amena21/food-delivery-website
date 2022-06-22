<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function testimonial(){
        return view('admin.testimonial.addtestimonial');
    }
    public function addtestimonial(Request $request){
        $data = new Testimonial;
        

        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
       
    }

    public function viewtestimonial(){
        $data = Testimonial::all();
        return view("admin.testimonial.viewtestimonial",compact("data"));
    }
    public function deletetestimonial($id){
        $data=Testimonial::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edittestimonial($id){
        $data=Testimonial::find($id);
        return view("admin.testimonial.edittestimonial",compact("data"));
    }
    public function updatetestimonial(Request $request,$id){
        $data=Testimonial::find($id);
        

        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
  
}

