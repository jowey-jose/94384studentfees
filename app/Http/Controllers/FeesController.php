<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        //
        $fees = Fees::all();
        return view('94384.feesIndex')->with('fees',$fees);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fees = new Fees();
        $fees->first_name = $request->input('first_name');
        $fees->last_name = $request->input('last_name');
        $fees->total_fees = $request->input('Tfees');
        $fees->Installment1 = $request->input('Installment1');
        $fees->Installment2 = $request->input('Installment2');
        $fees->total_installment = $request->input('Tinstallment');
        $fees->OneTime_payment = $request->input('OneTime');

        $fees->save();
        return redirect()->to('/feesIndex')->with('Success your fees details have been received');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Fees::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
