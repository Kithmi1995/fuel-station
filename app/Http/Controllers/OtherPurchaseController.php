<?php

namespace App\Http\Controllers;

use App\OtherPurchase;
use Illuminate\Http\Request;

class OtherPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otherpurchases = Otherpurchase::all();
        return view('purchase.other.index', ['otherpurchases' => $otherpurchases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchase.other.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $otherpurchase = new OtherPurchase;
        $otherpurchase->user_id = auth()->user()->id;
        $otherpurchase->date = $request->date;
        $otherpurchase->item = $request->item;
        $otherpurchase->o_rs = $request->o_rs;
        $otherpurchase->method = $request->input('method');
        $otherpurchase->save();
        return redirect()->to('/otherpurchase');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OtherPurchase  $otherPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(OtherPurchase $otherpurchase)
    {
        return view('purchase.other.show', ['otherpurchase' => $otherpurchase]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OtherPurchase  $otherPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(OtherPurchase $otherpurchase)
    {
        return view('purchase.other.edit', [ 'otherpurchase'=>$otherpurchase ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OtherPurchase  $otherPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtherPurchase $otherpurchase)
    {
        $otherpurchase->date = $request->date;
        $otherpurchase->item = $request->item;
        $otherpurchase->o_rs = $request->o_rs;
        $otherpurchase->method = $request->input('method');
        $otherpurchase->save();
        return redirect()->route('otherpurchase.show', $otherpurchase->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OtherPurchase  $otherPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherPurchase $otherPurchase)
    {
        $otherPurchase->delete();
        return redirect()->route('otherpurchase.index');
    }
}
