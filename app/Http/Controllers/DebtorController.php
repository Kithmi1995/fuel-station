<?php

namespace App\Http\Controllers;

use App\Debtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DebtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debtors = Debtor::all();
        return view('debtor.index', ['debtors' => $debtors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('debtor.create');
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

            'd_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact' => 'required',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect('lubricant/create')
                ->withErrors($validator)
                ->withInput();
        }

        $debtor = new Debtor;
        $debtor->user_id = auth()->user()->id;
        $debtor->d_name = $request->d_name;
        $debtor->address = $request->address;
        $debtor->contact = $request->contact;
        $debtor->email = $request->email;

        $debtor->save();
        return redirect()->to('/debtor');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function show(Debtor $debtor)
    {
        return view('debtor.show', ['debtor' => $debtor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function edit(Debtor $debtor)
    {
        return view('debtor.edit', [ 'debtor'=>$debtor ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Debtor $debtor)
    {
        $debtor->d_name = $request->d_name;
        $debtor->address = $request->address;
        $debtor->contact = $request->contact;
        $debtor->email = $request->email;
        $debtor->save();
        return redirect()->route('debtor.show', $debtor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Debtor $debtor)
    {
        $debtor->delete();
        return redirect()->route('debtor.index');
    }
}
