<?php

namespace App\Http\Controllers;
use App\Fee;
use Illuminate\Http\Request;


class FeesController extends Controller
{
    public function fees(){
        return view('abell.fees');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fees = Fee::all();
        return view('abell.feerecords',['fees'=>$fees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('abell.fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        if(request('id')!=null){
            $fee=Fee::all()->find(request('id'));
            $fee->student_id=request('student_id');
            $fee->payment_plan=request('payment_plan');
            $fee->amount=request('amount');
            $fee->fname=request('fname');
            $fee->lname=request('lname');
            $fee->save();
            return redirect('/fees');
            }else{
            $fee = new Fee();    
            $fee->student_id=request('student_id');
            $fee->payment_plan=request('payment_plan');
            $fee->amount=request('amount');
            $fee->fname=request('fname');
            $fee->lname=request('lname');
            $fee->save();
            return redirect('/fees');
            }
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
        $fee = Fee::all()->find($id);
        return view('/abell/feeview',compact('fee'));
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
    public function search(Request $request){
        $student_id = $request->input('student_id');
        $fees = Fee::where('student_id',$student_id)->get();
        $sum = $fees->sum('amount');
        return view('abell.feerecords',compact('fees'),compact('sum'));
    }
    public function getStdfees($id){
        $fees = Fee::all()->where("student_id", $id);
        return view('abell.stdfees',['fees'=>$fees]);
       }
}
