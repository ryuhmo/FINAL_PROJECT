<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    function AddClass(Request $request)
    {
      $member=new Member;
      $member->input('name');
      $member->input('subject');
      $member->input('course_code');
      $member->input('Class_period');
      $member->input('semester');
      $member->input('branch');


    //   $member->name=$request->name;
    //   $member->subject=$request->subject;
    //   $member->course_code=$request->course_code;
    //   $member->Class_period=$request->Class_period;
    //   $member->semester=$request->semester;
    //   $member->branch=$request->branch;
      $member->save();
    }

}
