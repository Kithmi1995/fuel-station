<?php

namespace App\Http\Controllers;

use App\Lubricant;
use App\LubricantSale;
use Illuminate\Http\Request;

class LubricantSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lubricantsales = LubricantSale::all();
        return view('sales.lubricant.index', ['lubricantsales' => $lubricantsales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lubricants = Lubricant::all();
        return view('sales.lubricant.create', ['lubricants' => $lubricants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lubricantsale = new LubricantSale;
        $lubricantsale->user_id = auth()->user()->id;
        $lubricantsale->lub_id = $request->lub_id;
        $lubricantsale->date = $request->date;
        $lubricantsale->time = $request->time;
        $lubricantsale->noi = $request->noi;

        $lubricantsale->save();
        return redirect()->to('/lubricantsale');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LubricantSale  $lubricantSale
     * @return \Illuminate\Http\Response
     */
    public function show(LubricantSale $lubricantsale)
    {
        return view('sales.lubricant.show', ['lubricantsale' => $lubricantsale]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LubricantSale  $lubricantSale
     * @return \Illuminate\Http\Response
     */
    public function edit(LubricantSale $lubricantsale)
    {
        return view('sales.lubricant.edit', [ 'lubricantsale'=>$lubricantsale ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LubricantSale  $lubricantSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LubricantSale $lubricantsale)
    {


        $lubricantsale->lub_id = $request->lub_id;
        $lubricantsale->date = $request->date;
        $lubricantsale->time = $request->time;
        $lubricantsale->noi = $request->noi;
        $lubricantsale->save();
        return redirect()->route('lubricantsale.show', $lubricantsale->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LubricantSale  $lubricantSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(LubricantSale $lubricantsale)
    {
        $lubricantsale->delete();
        return redirect()->route('lubricantsale.index');
    }
}
