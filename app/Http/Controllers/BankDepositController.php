<?php

namespace App\Http\Controllers;

use App\BankDeposit;
use Illuminate\Http\Request;

class BankDepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankDeposits = BankDeposit::all();
        return view('bank.index', ['bankDeposits' => $bankDeposits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bankDeposit = new BankDeposit;
        $bankDeposit->user_id = auth()->user()->id;
        $bankDeposit->date = $request->input('date');
        $bankDeposit->amount = $request->amount;
        $bankDeposit->b_name = $request->b_name;


        $bankDeposit->save();
        return redirect()->to('/bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BankDeposit  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(BankDeposit $bank)
    {
        return view('bank.show', ['bankDeposit' => $bank]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BankDeposit  $bankDeposit
     * @return \Illuminate\Http\Response
     */
    public function edit(BankDeposit $bank)
    {
        return view('bank.edit', [ 'bankDeposit' => $bank]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BankDeposit  $bankDeposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankDeposit $bank)
    {
        $bank->date = $request->input('date');
        $bank->amount = $request->amount;
        $bank->b_name = $request->b_name;
        $bank->save();
        return redirect()->route('bank.show', $bank->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BankDeposit  $bankDeposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankDeposit $bank)
    {
        $bank->delete();
        return redirect()->route('bank.index');
    }
}
