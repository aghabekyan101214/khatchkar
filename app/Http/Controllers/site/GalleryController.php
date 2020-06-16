<?php

namespace App\Http\Controllers\site;

use App\admin\Product;
use App\admin\Type;
use App\admin\Video;
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
        $videos = Video::orderBy("id", "desc")->get();
        $products = Product::orderBy("id", "desc")->where("category", Product::CATEGORIES[1])->paginate(5000);
        return view(self::VIEW . ".index", compact("videos", "products"));
    }
}
