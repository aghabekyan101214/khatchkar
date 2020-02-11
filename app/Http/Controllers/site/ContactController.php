<?php

namespace App\Http\Controllers\site;

use App\admin\Product;
use App\helpers\FileUpload;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //    path to the resource view
    const VIEW = "site.contact";

//   Resource route
    const ROUTE = "/contact-us";

//    Resource Title
    const TITLE = "Contact Us";

//    Resource Title
    const UPLOAD = "email";
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

    public function sendEmail(Request $request)
    {

//        $request->validate([
//            'name' => 'max:100',
//            'email' => 'email|max:100',
//            'phone' => 'max:100',
//            'image' => 'image|max:10000',
//            'message' => 'max:1000'
//        ]);

        $file = FileUpload::upload(self::UPLOAD, $request->image);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->message,
            'image' => $file
        );


        Mail::send(['html' => self::VIEW . ".mail"], $data, function($message) use($file) {
            $message->to('aghabekyan.pargev@gmail.com', 'Khatchkar esim inch')->subject
            ('Khatchkar Subject');
            $message->from('info@khatchkar.com', 'mykhatchkar.com');
            $message->attach(public_path("uploads/$file"));
        });
        FileUpload::deleteImage($file);
        return redirect("/")->with('success', 'Your Message Has Been Sent Successfully');

    }
}
