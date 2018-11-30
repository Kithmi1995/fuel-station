<?php

namespace App\Http\Controllers;

use App\Lubricant;
use Illuminate\Http\Request;

class LubricantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lubricants = Lubricant::all();
        return view('lubricant.index', ['lubricants' => $lubricants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lubricant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lubricant = new Lubricant;
        $lubricant->user_id = auth()->user()->id;
        $lubricant->type = $request->input('type');
        $lubricant->price = $request->price;
        $lubricant->price_date = $request->price_date;


        $lubricant->save();
        return redirect()->to('/lubricant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lubricant  $lubricant
     * @return \Illuminate\Http\Response
     */
    public function show(Lubricant $lubricant)
    {
        return view('lubricant.show', ['lubricant' => $lubricant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lubricant  $lubricant
     * @return \Illuminate\Http\Response
     */
    public function edit(Lubricant $lubricant)
    {
        return view('lubricant.edit', [ 'lubricant'=>$lubricant ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lubricant  $lubricant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lubricant $lubricant)
    {
        $lubricant->type = $request->input('type');
        $lubricant->price = $request->price;
        $lubricant->price_date = $request->price_date;
        $lubricant->save();
        return redirect()->route('lubricant.show', $lubricant->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lubricant  $lubricant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lubricant $lubricant)
    {
        $lubricant->delete();
        return redirect()->route('lubricant.index');
    }
}
