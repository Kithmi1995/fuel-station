<?php

namespace App\Http\Controllers;

use App\Pumper;
use Illuminate\Http\Request;

class PumperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pumpers = Pumper::all();
        return view('pumper.index', ['pumpers' => $pumpers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pumper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pumper = new Pumper;
        $pumper->user_id = auth()->user()->id;
        $pumper->nic = $request->nic;
        $pumper->first = $request->first;
        $pumper->last = $request->last;
        $pumper->address = $request->address;
        $pumper->contact = $request->contact;
        $pumper->dob = $request->dob;


        $pumper->save();
        return redirect()->to('/pumper');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pumper  $pumper
     * @return \Illuminate\Http\Response
     */
    public function show(Pumper $pumper)
    {
        return view('pumper.show', ['pumper' => $pumper]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pumper  $pumper
     * @return \Illuminate\Http\Response
     */
    public function edit(Pumper $pumper)
    {
        return view('pumper.edit', [ 'pumper'=>$pumper ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pumper  $pumper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pumper $pumper)
    {
        $pumper->nic = $request->input('nic');
        $pumper->first = $request->first;
        $pumper->last = $request->last;
        $pumper->address = $request->address;
        $pumper->contact = $request->contact;
        $pumper->dob = $request->dob;
        $pumper->save();
        return redirect()->route('pumper.show', $pumper->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pumper  $pumper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pumper $pumper)
    {
        $pumper->delete();
        return redirect()->route('pumper.index');
    }
}
