<?php

namespace App\Http\Controllers;

use App\Fuel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FuelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuels = Fuel::all();
        return view('fuel.index', ['fuels' => $fuels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role == "deo"){
            return view('fuel.create');
        }
        else{
            return "Login as deo to create new fuel entry";
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'type' => 'required|string|max:255',
            'price' => 'required',
            'price_date' => 'required|date'
        ]);

        if ($validator->fails()) {
            return redirect('fuel/create')
                ->withErrors($validator)
                ->withInput();
        }

        $fuel = new Fuel;
        $fuel->user_id = auth()->user()->id;
        $fuel->type = $request->input('type');
        $fuel->price = $request->price;
        $fuel->price_date = $request->price_date;

        $fuel->save();
        return redirect()->to('/fuel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function show(Fuel $fuel)
    {
        return view('fuel.show', ['fuel' => $fuel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function edit(Fuel $fuel)
    {
        return view('fuel.edit', [ 'fuel'=>$fuel ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fuel $fuel)
    {
        $fuel->type = $request->input('type');
        $fuel->price = $request->price;
        $fuel->price_date = $request->price_date;
        $fuel->save();
        return redirect()->route('fuel.show', $fuel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fuel $fuel)
    {
        $fuel->delete();
        return redirect()->route('fuel.index');
//        return "Hey, are you going to delete this? <br> Fuel Type = ".$fuel->type;
    }
}
