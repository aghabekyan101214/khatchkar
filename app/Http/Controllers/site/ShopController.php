<?php

namespace App\Http\Controllers\site;

use App\admin\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin\Type;
use Illuminate\Database\Eloquent\Builder;

class ShopController extends Controller
{
    //    path to the resource view
    const VIEW = "site.shop";

//   Resource route
    const ROUTE = "/shop";

//    Resource Title
    const TITLE = "Shop";

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Type::with(["items" => function($query){
            $query->where("category", Product::CATEGORIES[0]);
        }])->whereHas("items", function($query) {
            $query->where("category", Product::CATEGORIES[0]);
        })->get();
        $products = Product::orderBy("id", "desc")->where("category", Product::CATEGORIES[0])->paginate(5000);
        return view(self::VIEW . ".index", compact("items", "products"));
    }
}

