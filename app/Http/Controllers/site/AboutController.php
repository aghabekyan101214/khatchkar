<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //    path to the resource view
    const VIEW = "site.about";

//   Resource route
    const ROUTE = "/about";

//    Resource Title
    const TITLE = "Home";

    public function index()
    {
        return view(self::VIEW . ".index");
    }
}
