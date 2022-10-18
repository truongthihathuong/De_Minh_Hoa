<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentsController extends Controller
{
    //
    public function get_all_student(){
        $students = Student::all();
        return view('student_manager', ['students' => $students]);
    }
    public function get__student_by_id($id)
    {
        $student= Student::where('id',$id)->first();
        return view('student_edit', ['student' => $student]);

    }
    
}
