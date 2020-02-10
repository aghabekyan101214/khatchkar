<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin\Product;

class HomeController extends Controller
{
//    path to the resource view
    const VIEW = "site.home";

//   Resource route
    const ROUTE = "/";

//    Resource Title
    const TITLE = "Home";

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recent = Product::orderBy("id", "DESC")->paginate(3);
        return view(self::VIEW . ".index", compact("recent"));
    }
}
