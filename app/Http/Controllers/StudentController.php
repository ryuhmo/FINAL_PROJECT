<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //<-------INSERT DATA IN DB TABLE------->
    public function store(Request $request)
    {
        $students=new Student();
        $students->fname=$request->fname;

        $students->save();
        return redirect('/');
        //<-------END INSERT DATA IN DB TABLE------->
    }


//<-------FETCH DATA FROM DB TABLE------->
    Public function show()

       {
           $data=Student::all();
           return view('facultydata',['nice'=>$data]);
       }
//<-------END FETCH DATA FROM DB TABLE------->

}



