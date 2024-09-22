<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function add(Request $request) {
        $image = $request->image;
        $image_pro = time() . '.' . $image->getClientOriginalExtension();
        $image->move('storage/', $image_pro);
        $img = imagecreatefromstring(file_get_contents("storage/".$image_pro));
        imagejpeg($img, "storage/".$image_pro, 70);
        $category = \App\Category::create([
            'name' => $request->nom,
            'image' => $image_pro,

        ]);
        toastr()->success('Category is added seccussfully');
        return redirect()->back();
    }

    public function edit(Request $request) {
        
        if ($request->hasFile('image')){
        $image = $request->image;
        $image_pro = time() . '.' . $image->getClientOriginalExtension();
        $image->move('storage/', $image_pro);
        $img = imagecreatefromstring(file_get_contents("storage/".$image_pro));
        imagejpeg($img, "storage/".$image_pro, 70);

        $categorys = \App\Category::where('id',$request->id)->first();
        $name_cat = $categorys->name;
        
        $category = \App\Category::where('id',$request->id)->update([
            'name' => $request->nom,
            'image' => $image_pro,

        ]);

        $prod = \App\Product::where('category',$name_cat)->get();
        foreach($prod as $item){
            $item->update([
                'category' => $request->nom
            ]);
        }

        }
        else {
            $categorys = \App\Category::where('id',$request->id)->first();
        $name_cat = $categorys->name;
        $category = \App\Category::where('id',$request->id)->update([
            'name' => $request->nom,
        ]);
        $prod = \App\Product::where('category',$name_cat)->get();
        foreach($prod as $item){
            $item->update([
                'category' => $request->nom
            ]);
        }
        }
        toastr()->info('Category is edited seccussfully');
        return redirect()->back();
    }

    public function delete(Request $req) {

        $category = \App\Category::where('id', $req->id)->firstOrFail();
        $name_cat = $category->name;
        Storage::delete($category->image);
                $category->delete();
                $prod = \App\Product::where('category',$name_cat)->get();
        foreach($prod as $item){
            $item->delete();
        }
                toastr()->error('Category is deleted seccussfully');
        return redirect()->back();
    }
}
