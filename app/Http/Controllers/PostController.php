<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
    Public function show()

       {
           $data=Post::all();
           $tata = "999";
        //    return view('subject',['nice'=>$data]);
        return view('subject',compact('data','tata'));
       }
//<-------END FETCH DATA FROM DB TABLE------->


//<-------DELETE DATA FROM DB TABLE------->
Public function list()

{
    $data=Post::all();
    $tata = "999";
 //    return view('subject',['nice'=>$data]);
 return view('list',compact('data','tata'));
}
//<-------END Delete DATA FROM DB TABLE------->
}
