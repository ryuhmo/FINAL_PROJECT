@extends('layouts.layout')
@section('content')
<style>
    input type{
       border:7px solid black;
    }
    </style>
        <h1 class="Class-record">CLASSES RECORDS</h1>


       <div class="form-border">
           {{-- <form action="rtz" method="POST" enctype = "multipart/form-data">
           @csrf
            <input type="text" name="fname">
            <button type="submit">SUBMIT</button>
           </form> --}}
         <form action="subject" method="POST" enctype = "multipart/form-data" style=margin-left:8px>
        @csrf


            <fieldset>
                <legend>CLass</legend>
                <label>Name :</label>
            <input type = "text" name="name" placeholder  = "Enter Your Name." ><br>

             <label>Subject :</label>
            <input type = "text" name="subject" value  = "Enter Course Name." ><br>

            <label>Course Code: </label>
            <input type = "text" name="course_code" value= "Enter Course Code." required>

            <span><label style="margin-left:45px">Class Period Start: </label>
            <input type = "time" name="class_period_start" value= "Enter Period of Class."  required></span>

            <span><label style="margin-left:45px">Class Period End: </label>
            <input type = "time" name="class_period_end" value= "Enter Period of Class."  required></span>

            <p><label>Semester:  </label>
            <input type = "text" name="semester" value= "Enter Semester"  required></p>

            <p><label>Branch:</label>
            <input type = "text" name="branch"  value= "Enter Branch Name" style=margin-left:33px></p>
             <input type="submit" class="form-submit" name="submit">
            <fieldset>
        </form>
        </div>
@endsection

