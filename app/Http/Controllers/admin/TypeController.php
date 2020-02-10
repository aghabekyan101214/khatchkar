<?php

namespace App\Http\Controllers\admin;

use App\admin\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{

//    path to the resource view
    const VIEW = "admin.types";

//   Resource route
    const ROUTE = "admin/types";

//    Resource Title
    const TITLE = "Types";

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = Type::paginate(500);
        $route = self::ROUTE;
        $title = self::TITLE;
        return view(self::VIEW.".index", compact("data", "route", "title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $route = self::ROUTE;
        $title = self::TITLE;
        $action = "Create";
        return view(self::VIEW.".create", compact( "route", "title", "action"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        $type = new Type();
        $type->name = $request->name;
        $type->save();

        return redirect(self::ROUTE);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Type  $type
     */
    public function edit(Type $type)
    {
        $route = self::ROUTE;
        $title = self::TITLE;
        $action = "Edit";
        return view(self::VIEW.".create", compact( "route", "title", "action", "type"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Type  $type
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        $type->name = $request->name;
        $type->save();

        return redirect(self::ROUTE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Type  $type
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect(self::ROUTE);
    }
}
