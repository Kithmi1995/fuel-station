<?php

namespace App\Http\Controllers;

use App\Pump;
use Illuminate\Http\Request;

class PumpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pumps = Pump::all();
        return view('pump.index', ['pumps' => $pumps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pump.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pump = new Pump;
        $pump->user_id = auth()->user()->id;
        $pump->pump_name = $request->pump_name;
        $pump->fuel_id = $request->fuel_id;
        $pump->tank_id = $request->tank_id;

        $pump->save();
        return redirect()->to('/pump');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function show(Pump $pump)
    {
        return view('pump.show', ['pump' => $pump]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function edit(Pump $pump)
    {
        return view('pump.edit', [ 'pump'=>$pump ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pump $pump)
    {

        $pump->pump_name = $request->pump_name;
        $pump->fuel_id = $request->fuel_id;
        $pump->tank_id = $request->tank_id;

        $pump->save();
        return redirect()->route('pump.show', $pump->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pump $pump)
    {
        $pump->delete();
        return redirect()->route('pump.index');
    }
}
