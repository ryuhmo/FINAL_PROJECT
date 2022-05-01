<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Student;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function AddClass(Request $request)
    {
        return view('addclass');
        //   $member=new Member;
    //   $member->input('name');
    //   $member->input('subject');
    //   $member->input('course_code');
    //   $member->input('Class_period');
    //   $member->input('semester');
    //   $member->input('branch');


    //   $member->name=$request->name;
    //   $member->subject=$request->subject;
    //   $member->course_code=$request->course_code;
    //   $member->Class_period=$request->Class_period;
    //   $member->semester=$request->semester;
    //   $member->branch=$request->branch;
    //   $member->save();
    }
    public function store(Request $request)
    {
        $students=new Student();

        $students->fname=$request->input('fname');
        $students->save();
        return redirect('/');
    }



}

