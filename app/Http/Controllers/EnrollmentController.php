<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments=Enrollment::all();
        return view('enrollment.index')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students=Student::pluck('name','id');
        $batches=Batch::pluck('name','id');

        return view('enrollment.create',compact(var_name: ['batches','students']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message','enrollment Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments=Enrollment::find($id);
        return view('enrollment.show')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments=Enrollment::find($id);
        return view('enrollment.edit')->with('enrollments',$enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments=Enrollment::find($id);
        $input= $request->all();
        $enrollments->update($input);
        return redirect('batches')->with('flash_message','enrollment updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message','enrollment deleted');
    }
}
