<?php

namespace App\Http\Controllers;

use App\classes;
use App\student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clas = classes::all();
        $studentShow = student::all();
        return view('/student.index', compact('studentShow', 'clas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clas = classes::all();
        return view('/student.create', compact('clas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, classes $classes)
    {

        $studentadd = student::create($this->validateRequest());
        $clas = classes::findorFail($request->class_id);
        $totalStudent = intval($clas->student)+1;
        $clas->student=$totalStudent;
        $clas->save();
        $this->storedImage($studentadd);
        return redirect('/student')->with('status', 'New Student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */

    public function show(student $student) : StudentResource
    {
        return new StudentResource($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        $clas = classes::all();
        return view('/student.show', compact('student', 'clas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $student->update($request->validate([
            'roll_no' => 'required|string',
            'name'      => 'required |string',
            'fname'     => 'required |string',
            'mname'     => 'required |string',
            'phone'     => 'required |string',
            'email'     => 'required |string |email',
            'dob'       => 'required |string',
            'class_id'  => 'required |string',
            'section'   => '',
            'address'   => 'required |string',
            'image' => '',
        ]));
        $this->storedImage($student);
        return back()->with('status', 'Student Detail is update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect('/student')->with('status', 'Deleted!!');
    }
    public function check(Request $request)
    {
        $class_id = request()->class_id;
        $data = student::where('class_id',$class_id)->get();
        return  $data;
    }



    private function validateRequest()
    {
        $data = request()->validate([
            'name'      => 'required |string',
            'fname'     => 'required |string',
            'mname'     => 'required |string',
            'phone'     => 'required |string',
            'email'     => 'required |string |email',
            'dob'       => 'required |string',
            'class_id'  => 'required |string',
            'section'   => '',
            'address'   => 'required |string',
            'images'    => 'required|mimes:png,jpg,jpeg|file|max:10000',
        ]);
        $data['username'] = strtolower(str_replace(' ','',$data['name'])).'_'.str_replace('/', '', $data['dob']);
        return $data;
    }
    protected function storedImage($paper)
    {
        if(request()->hasfile('images')){
            $file = request()->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = "/images/studentDetails/".time().'.'.$extension;
            $file->move(public_path("../public/images/studentDetails"), $filename);
            $paper->images = $filename;
            $paper->save();
        }
    }
}
