<?php

namespace App\Http\Controllers\admin;

use App\admin\Product;
use App\admin\Type;
use App\helpers\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

//    path to the resource view
    const VIEW = "admin.khatchkars";

//   Resource route
    const ROUTE = "admin/products";

//    Resource Title
    const TITLE = "Khatchkars";

//    Resource Title
    const UPLOAD = "khatchkars";

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::paginate(5000);
        $route = self::ROUTE;
        $title = self::TITLE;
        return view(self::VIEW . ".index", compact("data", "route", "title"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $route = self::ROUTE;
        $title = self::TITLE;
        $types = Type::all();
        $categories = Product::CATEGORIES;
        $action = "Create";
        return view(self::VIEW . ".create", compact("route", "title", "action", "types", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required|integer|max:100',
            'name' => 'required|max:100',
            'price' => 'required|max:100',
            'material' => 'required|max:100',
            'height' => 'required|max:100',
            'width' => 'required|max:100',
            'thickness' => 'required|max:100',
            'image' => 'image|required|max:10000',
            'location' => 'max:100',
        ]);

        $file = FileUpload::upload(self::UPLOAD, $request->image);
        $product = new Product();
        $product->name = $request->name;
        $product->type_id = $request->type_id;
        $product->price = $request->price;
        $product->material = $request->material;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->thickness = $request->thickness;
        $product->image = $file;
        $product->location = $request->location;
        $product->description = $request->description;

        $product->save();

        return redirect(self::ROUTE);
    }

    /**
     * Display the specified resource.
     * @param \App\admin\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\admin\Product $product
     */
    public function edit(Product $product)
    {
        $route = self::ROUTE;
        $title = self::TITLE;
        $types = Type::all();
        $categories = Product::CATEGORIES;
        $action = "Create";
        return view(self::VIEW . ".create", compact("route", "title", "action", "types", "product", "categories"));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\admin\Product       $product
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'type_id' => 'required|integer|max:100',
            'name' => 'required|max:100',
            'price' => 'required|max:100',
            'material' => 'required|max:100',
            'height' => 'required|max:100',
            'width' => 'required|max:100',
            'thickness' => 'required|max:100',
            'image' => 'image|max:10000',
            'location' => 'max:100',
        ]);

        if(null != $request->image) {
            $file = FileUpload::upload(self::UPLOAD, $request->image, $product->image);
            $product->image = $file;
        }

        $product->name = $request->name;
        $product->type_id = $request->type_id;
        $product->price = $request->price;
        $product->material = $request->material;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->thickness = $request->thickness;
        $product->location = $request->location;
        $product->description = $request->description;

        $product->save();

        return redirect(self::ROUTE);

    }

    /**
     * Remove the specified resource from storage.
     * @param \App\admin\Product $product
     */
    public function destroy(Product $product)
    {
        FileUpload::deleteImage($product->image);
        $product->delete();
        return redirect(self::ROUTE);
    }
}
