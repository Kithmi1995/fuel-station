<?php

namespace App\Http\Controllers;

use App\Fuel;
use App\FuelPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuelPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuelpurchases = FuelPurchase::all();
        return view('purchase.fuel.index', ['fuelpurchases' => $fuelpurchases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchase.fuel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fuelpurchase = new FuelPurchase;
        $fuelpurchase->user_id = auth()->user()->id;
        $fuelpurchase->date = $request->input('date');
        $fuelpurchase->fuel_id = $request->fuel_id;
        $fuelpurchase->fuel_name = $request->fuel_name;
        $fuelpurchase->f_liter = $request->f_liter;
        $fuelpurchase->f_rs = $request->f_rs;
        $fuelpurchase->p_method = $request->p_method;
        $fuelpurchase->save();
        return redirect()->to('/fuelpurchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuelPurchase  $fuelPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(FuelPurchase $fuelpurchase)
    {
//        return $fuelpurchase;
        return view('purchase.fuel.show', ['fuelpurchase' => $fuelpurchase]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuelPurchase  $fuelPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(FuelPurchase $fuelpurchase)
    {
        return view('purchase.fuel.edit', [ 'fuelpurchase'=>$fuelpurchase ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuelPurchase  $fuelPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuelPurchase $fuelpurchase)
    {

        $fuelpurchase->date = $request->input('date');
        $fuelpurchase->fuel_id = $request->fuel_id;
        $fuelpurchase->fuel_name = $request->fuel_name;
        $fuelpurchase->f_liter = $request->f_liter;
        $fuelpurchase->f_rs = $request->f_rs;
        $fuelpurchase->p_method = $request->p_method;
        $fuelpurchase->save();
        return redirect()->route('fuelpurchase.show', $fuelpurchase->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuelPurchase  $fuelPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuelPurchase $fuelpurchase)
    {
        $fuelpurchase->delete();
        return redirect()->route('fuelpurchase.index');
    }

    public function createReport()
    {
        return view('purchase.fuel.reports.create');
    }

    public function getReport(Request $request)
    {
        $from = $request->input('date_from');
        $to = $request->input('date_to');
//        DB::enableQueryLog();
        $fuels = Fuel::whereHas('fuel_purchases', function ($query) use ($from, $to){
            $query->whereBetween('date', [$from, $to]);
        })->get();
//        return $fuels;
//        dd(DB::getQueryLog());
//        $fuels = Fuel::all();
//        DB::enableQueryLog();
//        $fuelpurchase = FuelPurchase::where('date', '>=', $from)->where('date', '<=', $to)->get();

//        dd(DB::getQueryLog());
        return view('purchase.fuel.reports.show', ['fuels' => $fuels, 'from' => $from, 'to' => $to]);
    }
}
