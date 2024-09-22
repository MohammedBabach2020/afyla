<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function add(Request $request) {
        $image = $request->image;
        $image_pro = time() . '.' . $image->getClientOriginalExtension();
        $image->move('storage/', $image_pro);
        $img = imagecreatefromstring(file_get_contents("storage/".$image_pro));
        imagejpeg($img, "storage/".$image_pro, 70);
        $product = \App\Product::create([
            'name' => $request->nom,
            'image' => $image_pro,
            'stock' => $request->stock,
            'uni' => $request->uni,
            'description' => $request->description,
            'category' => $request->categorie,

        ]);
        if(!empty($request->input('size'))){
        foreach($request->size as $size){
            $nam = str_replace('.', 'n', $size);
            if($nam != ""){
            $siezs = \App\Size::create([
                'prod_id' => $product->id,
'size' => $size,
'price' => $request->$nam,

            ]);
            }
        }
    }
        toastr()->success('Product is added seccussfully');
        return redirect()->back();
    }

    public function edit(Request $request) {
        
        if ($request->hasFile('image')){
        $image = $request->image;
        $image_pro = time() . '.' . $image->getClientOriginalExtension();
        $image->move('storage/', $image_pro);
        $img = imagecreatefromstring(file_get_contents("storage/".$image_pro));
        imagejpeg($img, "storage/".$image_pro, 70);
        
        $product = \App\Product::where('id',$request->id)->update([
            'name' => $request->nom,
            'image' => $image_pro,
            'stock' => $request->stock,
            'uni' => $request->uni,
            'description' => $request->description,
            'category' => $request->categorie,

        ]);
        }
        else {
        $product = \App\Product::where('id',$request->id)->update([
            'name' => $request->nom,
            'stock' => $request->stock,
            'uni' => $request->uni,
            'description' => $request->description,
            'category' => $request->categorie,
        ]);
        }
toastr()->info('Product is edited seccussfully');
        return redirect()->back();
    }

    public function delete(Request $req) {

        $products = \App\Product::where('id', $req->id)->firstOrFail();
        Storage::delete($products->image);
                $products->delete();
toastr()->error('Product is deleted seccussfully');
        return redirect()->back();
    }

    public function trend(Request $req) {
        if($req->trend == 1){
            $trend = \App\Product::where('id',$req->id)->update([
                'trends' => 0,
            ]);
            
        }
        if($req->trend == 0){
            $trend = \App\Product::where('id',$req->id)->update([
                'trends' => 1,
            ]);
            
        }
        return redirect()->back();


    }
}
