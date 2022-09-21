<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller {
    function index(){
        $sliders = Slider::latest()->paginate(5);
        $params = [
            'sliders' => $sliders
        ];
        return view('admin.slider.index', $params);
    }
    function create(){
        return view('admin.slider.add');
    }
    function store(Request $request){
        $file_image = $request->file('image');
        $path_image = 'storage/'.$file_image->store('images/slider', 'public');
        $data_create = [
            'link_load' => $request->link_load,
            'image' => $path_image
        ];
        $slider = Slider::create($data_create);
        return redirect()->route('slider.index');
    }
    function edit($id){
        $slider = Slider::where('id', $id)->first();
        $params = [
            'slider' => $slider
        ];
        return view('admin.slider.edit', $params);
    }
    function update($id, Request $request){
        $file_image = $request->file('image');
        $path_image = 'storage/'.$file_image->store('images/slider', 'public');
        $slider = Slider::where('id', $id)->first();
        $slider->update([
            'link_load' => $request->link_load, 
            'image' => $path_image
        ]);
        return redirect()->route('slider.index');
    }
    function delete($id){
        $slider = Slider::where('id', $id)->delete();
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], status: 200);
    }
}
