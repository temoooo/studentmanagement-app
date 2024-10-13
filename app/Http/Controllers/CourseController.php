<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {

        $courses=Course::all();
        return view('course.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'course Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('course.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view('course.edit')->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'course Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'course deleted!'); 
    }
}
