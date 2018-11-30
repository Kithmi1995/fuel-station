<?php

namespace App\Http\Controllers;

use App\LubricantPurchase;
use Illuminate\Http\Request;

class LubricantPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lubricantpurchases = LubricantPurchase::all();
        return view('purchase.lubricant.index', ['lubricantpurchases' => $lubricantpurchases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchase.lubricant.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lubricantpurchase = new LubricantPurchase;
        $lubricantpurchase->user_id = auth()->user()->id;
        $lubricantpurchase->date = $request->date;
        $lubricantpurchase->lub_id = $request->lub_id;
        $lubricantpurchase->lub_name = $request->lub_name;
        $lubricantpurchase->l_liter = $request->l_liter;
        $lubricantpurchase->l_rs = $request->l_rs;
        $lubricantpurchase->p_method = $request->p_method;


        $lubricantpurchase->save();
        return redirect()->to('/lubricantpurchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LubricantPurchase  $lubricantPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(LubricantPurchase $lubricantpurchase)
    {
        return view('purchase.lubricant.show', ['lubricantpurchase' => $lubricantpurchase]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LubricantPurchase  $lubricantPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(LubricantPurchase $lubricantpurchase)
    {
        return view('purchase.lubricant.edit', [ 'lubricantpurchase'=>$lubricantpurchase ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LubricantPurchase  $lubricantPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LubricantPurchase $lubricantpurchase)
    {

        $lubricantpurchase->date = $request->date;
        $lubricantpurchase->lub_id = $request->lub_id;
        $lubricantpurchase->lub_name = $request->lub_name;
        $lubricantpurchase->l_liter = $request->l_liter;
        $lubricantpurchase->l_rs = $request->l_rs;
        $lubricantpurchase->p_method = $request->p_method;
        $lubricantpurchase->save();
        return redirect()->route('lubricantpurchase.show', $lubricantpurchase->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LubricantPurchase  $lubricantPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(LubricantPurchase $lubricantpurchase)
    {
        $lubricantpurchase->delete();
        return redirect()->route('lubricantpurchase.index');
    }
}
