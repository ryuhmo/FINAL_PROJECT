<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    //<-------INSERT DATA IN DB TABLE------->
    public function store(Request $request)
    {
        $post =new Post();
        $post->name=$request->name;
        $post->subject=$request->subject;
        $post->course_code=$request->course_code;
        $post->class_period_start=$request->class_period_start;
        $post->class_period_end=$request->class_period_end;

        $post->semester=$request->semester;
        $post->branch=$request->branch;

        $post->save();
        return redirect('/subjects')->with('success', 'You have submitted successful!!');
        //<-------END INSERT DATA IN DB TABLE------->
    }


    //<-------FETCH DATA FROM DB TABLE------->
    public function show()
    {
        $data=Post::all();
        $tata = "999";
        //    return view('subject',['nice'=>$data]);
        return view('subject', compact('data', 'tata'));
    }
    //<-------END FETCH DATA FROM DB TABLE------->


    //<-------DELETE DATA FROM DB TABLE------->
    public function list()
    {
         $data=Post::all();
         $tata = "999";
            return view('subject',['nice'=>$data]);
        return view('list', compact('data', 'tata'));
    }
    //<-------END Delete DATA FROM DB TABLE------->


    Public function edit()
    {
    //
    $data=Post::all();
    return view('admin.edit',compact('data'));
    }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Student  $student
 * @return \Illuminate\Http\Response
 *
 *
 *
 *
 *
 *
 *
 *
 */
// public function update(Request $request,$id)
// {
//     //

//     $request->validate([
//         'txtFirstName'=>'required',
//         'txtLastName'=> 'required',
//         'txtAddress' => 'required'
//     ]);


//     $student = Student::find($id);
//     $student->first_name = $request->get('txtFirstName');
//     $student->last_name = $request->get('txtLastName');
//     $student->address = $request->get('txtAddress');

//     $student->update();

//     return redirect('/student')->with('success', 'Student updated successfully');
// }

// /**
//  * Remove the specified resource from storage.
//  *
//  * @param  \App\Student  $student
//  * @return \Illuminate\Http\Response
//  */
// Public function destroy(Student $student)
// {
//     //
//     $student->delete();
//     return redirect('/student')->with('success', 'Student deleted successfully');
//

    public function roleindex()
    {
        $role=Auth::user()->role;

        Log::debug($role);
        if($role=='1')
        {
            return view('role.admin');
        }

        elseif ($role== '2')
        {
            $data = Post::all();
            return view('role.hod',compact('data'));
        }
        elseif ($role== '0')
        {
            $data = Post::all();
            return view('role.faculty',compact('data'));
        }

      else
        {

            return view('dashboard');
        }

    }
    public function addfaculty(Request $request)
    {
        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role='0';

        $data->save();
        return redirect()->back();
    }
    public function addfac()
    {
   return view('role.addfaculty');
    }

}
