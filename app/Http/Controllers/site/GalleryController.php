<?php

namespace App\Http\Controllers\site;

use App\admin\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //    path to the resource view
    const VIEW = "site.gallery";

//   Resource route
    const ROUTE = "/gallery";

//    Resource Title
    const TITLE = "Gallery";

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gallery = Product::orderBy("id", "DESC")->where("category", Product::CATEGORIES[1])->get();
        return view(self::VIEW . ".index", compact("gallery"));
    }
}
