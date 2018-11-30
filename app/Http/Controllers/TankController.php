<?php

namespace App\Http\Controllers;

use App\Fuel;
use App\Tank;
use Illuminate\Http\Request;

class TankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanks = Tank::all();
        return view('tank.index', ['tanks' => $tanks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fuels = Fuel::all();
        return view('tank.create', ['fuels' => $fuels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tank = new Tank;
        $tank->user_id = auth()->user()->id;
        $tank->tank_name = $request->tank_name;
        $tank->fuel_id = $request->fuel_id;
        $tank->capacity = $request->capacity;

        $tank->save();
        return redirect()->to('/tank');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function show(Tank $tank)
    {
        return view('tank.show', ['tank' => $tank]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function edit(Tank $tank)
    {
        return view('tank.edit', [ 'tank'=>$tank ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tank $tank)
    {

        $tank->tank_name = $request->tank_name;
        $tank->fuel_id = $request->fuel_id;
        $tank->capacity = $request->capacity;

        $tank->save();
        return redirect()->route('tank.show', $tank->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tank $tank)
    {
        $tank->delete();
        return redirect()->route('tank.index');
    }
}
