<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses= Course::all();

        return view('index', compact('courses'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            "course_id"=>'required|unique:courses',
            "teacher"=>'required',
            "publisher"=>'required',
            "url"=>'required'
         
        ]);

        $course=new Course;
        $course->course_id=$req->course_id;
        $course->teacher=$req->teacher;
        $course->teachers_mail=$req->teachers_mail;
        $course->publisher=$req->publisher;
        $course->url=$req->url;
        $result=$course->save();

        return redirect('api/course')->with('success', 'New Cource is saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Course::find($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('edit', compact('course')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req,[
            "course_id"=>'required|unique:courses',
            "teacher"=>'required',
            "publisher"=>'required',
            "url"=>'required'
         
        ]);

        $course=Course::find($id);
        $course->course_id=$req->course_id;
        $course->teacher=$req->teacher;
        $course->teachers_mail=$req->teachers_mail;
        $course->publisher=$req->publisher;
        $course->url=$req->url;
        $result=$course->save();

        return redirect('api/course')->with('success', 'Course updated!');
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
        $course= Course::find($id);
        $result=$course->delete();
        return redirect('api/course')->with('success', 'Course deleted!');
    }
}
