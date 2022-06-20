<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\User;
use DB;


class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = DB::select('select * from prices');
        return view('admin.prices.index',['prices'=>$prices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $arr['users']=User::all();
        return view('admin.prices.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Price $prices)
    {   
        $prices->image = $request->image;
        $prices->price_id = $request->price_id;
        $prices->title = $request->title;
        $prices->price = $request->price;
        $prices->location = $request->location;
        $prices->save();
        return redirect()->route('admin.prices.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $prices)
    {
        $arr['prices'] = $prices;
        $arr['users']=User::all();
        return view('admin.prices.edit')->with($arr);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $prices, User $user)
    {   
        $arr['prices'] = $prices;
        $prices->price_id = $request->price_id;
        $prices->image = $request->image;
        $prices->title = $request->title;
        $prices->price = $request->price;
        $prices->location = $request->location;
        $prices->save();
        return redirect()->route('admin.prices.index')->with($arr); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Price::destroy($id);
        return redirect()->route('admin.prices.index');
    }
}
