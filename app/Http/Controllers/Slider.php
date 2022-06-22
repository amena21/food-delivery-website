<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SliderModel;

class Slider extends Controller
{
    public function newslider(){
        return view('admin.slider.addslider');
    }
    public function addslider(Request $request){
        $data = new SliderModel;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('sliderimage',$imagename);
        $data ->image=$imagename;

        $image2 = $request ->image2;
        $image2name =time().'.'.$image2->getClientOriginalExtension();
        $request->image2->move('sliderimage',$image2name);
        $data ->image2=$image2name;
        $data->website_name=$request->website_name;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
        // return view('admin.addslider')->with("success","Inserted successfully");
       
    }

    public function viewslider(){
        $data = SliderModel::all();
        return view("admin.slider.viewslider",compact("data"));
    }
    public function deleteslider($id){
        $data=SliderModel::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editslider($id){
        $data=SliderModel::find($id);
        return view("admin.slider.editslider",compact("data"));
    }
    public function updateslider(Request $request,$id){
        $data=SliderModel::find($id);
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('sliderimage',$imagename);
        $data ->image=$imagename;

        $image2 = $request ->image2;
        $imagename =time().'.'.$image2->getClientOriginalExtension();
        $request->image2->move('sliderimage',$imagename);
        $data ->image2=$imagename;

        $data->website_name=$request->website_name;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

  
}
