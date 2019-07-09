<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function home(){
        
        return view('abell.home');
         
           }
        
            public function student(){
        
                return view('abell.student');
        
            }        
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('abell.stdrecords',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('abell.student');
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
            $student=Student::all()->find(request('id'));
            $student->fname=request('fname');
            $student->lname=request('lname');
            $student->dob=request('dob');
            $student->address=request('address');
            $student->save();
            return redirect('/student');
            }else{
            $student = new Student();    
            $student->fname=request('fname');
            $student->lname=request('lname');
            $student->dob=request('dob');
            $student->address=request('address');
            $student->save();
            return redirect('/student');
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
        $student = Student::all()->find($id);
        return view('/abell/stdview',compact('student'));
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
        $student = Student::all()->find($id);
        return view('/abell/student',compact('student'));
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
        $students = Student::all()->find($id);
        $students->delete();
        return redirect('/abell/stdrecords');
    }
}
