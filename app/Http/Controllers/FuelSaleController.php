<?php

namespace App\Http\Controllers;

use App\FuelSale;
use App\Pumper;
use App\Pump;
use Illuminate\Http\Request;

class FuelSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuelsales = FuelSale::all();
        return view('sales.fuel.index', ['fuelsales' => $fuelsales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pumpers = Pumper::all();
        $pumps =  Pump::all();
        return view('sales.fuel.create', ['pumpers' => $pumpers, 'pumps' => $pumps]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request->all();
        $fuelsale = new FuelSale;
        $fuelsale->id = $request->id;
        $fuelsale->user_id = auth()->user()->id;
        $fuelsale->pump_id = $request->pump_id;
        $fuelsale->pumper_id = $request->input('pumper_id');
        $fuelsale->close = $request->close;
        $fuelsale->s_time = $request->s_time;
        $fuelsale->e_time = $request->e_time;
        $fuelsale->s_date = $request->s_date;
        $fuelsale->d_sale = $request->d_sale;
        $fuelsale->c_sale = $request->c_sale;
        $fuelsale->shortage = $request->shortage;

        $fuelsale->save();
        return redirect()->route('fuelsale.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuelSale  $fuelSale
     * @return \Illuminate\Http\Response
     */
    public function show(FuelSale $fuelsale)
    {
        return view('sales.fuel.show', ['fuelsale' => $fuelsale]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuelSale  $fuelSale
     * @return \Illuminate\Http\Response
     */
    public function edit(FuelSale $fuelsale)
    {
        return view('sales.fuel.edit', [ 'fuelsale'=>$fuelsale ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuelSale  $fuelSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuelSale $fuelsale)
    {

        $fuelsale->pump_id = $request->pump_id;
        $fuelsale->pumper_id = $request->input('pumper_id');
        $fuelsale->close = $request->close;
        $fuelsale->s_time = $request->s_time;
        $fuelsale->e_time = $request->e_time;
        $fuelsale->s_date = $request->s_date;
        $fuelsale->d_sale = $request->d_sale;
        $fuelsale->c_sale = $request->c_sale;
        $fuelsale->shortage = $request->shortage;

        $fuelsale->save();
        return redirect()->route('fuelsale.show', $fuelsale->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuelSale  $fuelSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuelSale $fuelSale)
    {
        $fuelSale->delete();
        return redirect()->route('fuelsale.index');
    }
}
