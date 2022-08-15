<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $item = new Student();
            $item->name = $request->name;  
            $item->email = $request->email;
            $item->major = $request->major;
            $item->class = $request->class;
            $item->school = $request->school;
            $item->save();
            return response()->json(['message',"item save successfully"]) ;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Student::findOrFail($id);
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
        
        $item = Student::find($id);
        $item->name = $request->name;  
        $item->email = $request->email;
        $item->major = $request->major;
        $item->class = $request->class;
        $item->school = $request->school;
        $item->save();
        return response()->json(['message',"item save successfully"]) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Student::destroy($id);
    }
}
