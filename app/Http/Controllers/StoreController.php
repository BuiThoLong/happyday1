<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Resort;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store() {
        $resorts = Resort::all();
        $resorts->load("image");
        return view("admin.resort.store",compact('resorts'));
    }
    public function remove($id) {
         Resort::destroy($id);
         return redirect()->back();
    }
    public function create() {
        $category = Category::all();
        return view("admin.resort.create",compact('category'));
    }
    public function edit($id) {
        $category = Category::all();
        $resort = Resort::find($id);
        return view("admin.resort.update",compact('category', "resort"));
    }
    public function insert(Request $request) {
        $image = new Image();
        $image -> name = $request->name;
        $image -> path = $request->file('upFile')->store('images');
        $image->save();

        $resort = new Resort();
        $resort -> fill($request->all());
        $resort -> image_id = $image->id;
        $resort->save();
        
        return redirect()->route('store.resort');
    }
    public function update(Request $request, $id) {
        

        $resort = Resort::find($id);
        $resort -> fill($request->all());
        $resort->save();

        $image = Image::find($resort->image_id);
        $image -> name = $request->name;
        $image -> path = $request->upFile;
        $image->save();
        
        return redirect()->route('store.resort');
    }
}
