<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;







class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function faculty1()
    // {
    //     return view("faculty1");
    // }

    public function loginView()
    {

        return view('loginpage');
    }

    public function adminView()
    {

        return view('adminview');
    }

    public function footerView()
    {

        return view('footer');
    }

    public function AdminPage()
    {

        return view('adminpage');
    }


    public function HomeView()
    {

        return view('/homepage');
    }

    public function Faculty1()
    {

        return view('faculty1');
    }

    public function FacultyData()
    {

        return view('facultydata');
    }
    // public function Test()
    // {

    //     return view('test');
    // }





        function AddClass(Request $request)
    {

          $post=new Post;
          $post->name=$request->name;
          $post->subject=$request->subject;
          $post->course_code=$request->course_code;
          $post->Class_period=$request->Class_period;
          $post->semester=$request->semester;
          $post->branch=$request->branch;
          $post->save();
    }
    //     function add(Request $request){
    //         $request->validate([


    //         ]);

    //     }
    // public function AddClass(Request $request)
    // {

    //     $posts= new Post;
    //     $posts->name=$request->name;
    //     $posts->subject=$request->subject;
    //     $posts->course_code=$request->course_code;
    //     $posts->save();
    //     return redirect('/homepage')->with('status', "inserted successfully");
    // }
    // -------------------------
    // function AddClass(Request $request)

    // {
    //   $post=new Post;
    //   $post->name=$request->name;
    //   $post->subject=$request->subject;
    //   $post->course_code=$request->course_code;
    //   $post->Class_period=$request->Class_period;
    //   $post->semester=$request->semester;
    //   $post->branch=$request->branch;
    //   $post->save();

    //  }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        //
    }

    public function index()
    {
        return view('index');
    }
}
