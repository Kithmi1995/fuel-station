<?php

namespace App\Http\Controllers;

use App\DepositDebtor;
use Illuminate\Http\Request;

class DepositDebtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depositDebtors = DepositDebtor::all();
        return view('deposit_debtor.index', ['depositDebtors' => $depositDebtors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deposit_debtor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depositDebtor = new DepositDebtor;
        $depositDebtor->user_id = auth()->user()->id;
        $depositDebtor->date = $request->date;
        $depositDebtor->deb_id = $request->deb_id;
        $depositDebtor->amount = $request->amount;

        $depositDebtor->save();
        return redirect()->to('/deposit_debtor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DepositDebtor  $depositDebtor
     * @return \Illuminate\Http\Response
     */
    public function show(DepositDebtor $deposit_debtor)
    {
        return view('deposit_debtor.show', ['depositDebtor' => $deposit_debtor]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DepositDebtor  $depositDebtor
     * @return \Illuminate\Http\Response
     */
    public function edit(DepositDebtor $deposit_debtor)
    {
        return view('deposit_debtor.edit', ['depositDebtor' => $deposit_debtor]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DepositDebtor  $depositDebtor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepositDebtor $deposit_debtor)
    {
        $deposit_debtor->user_id = auth()->user()->id;
        $deposit_debtor->date = $request->date;
        $deposit_debtor->deb_id = $request->deb_id;
        $deposit_debtor->amount = $request->amount;
        $deposit_debtor->save();
        return redirect()->route('deposit_debtor.show', $deposit_debtor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DepositDebtor  $depositDebtor
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepositDebtor $deposit_debtor)
    {
        $deposit_debtor->delete();
        return redirect()->route('deposit_Debtor.index');
    }
}
