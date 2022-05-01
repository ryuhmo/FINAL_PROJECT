@extends('layouts.layout')
@section('content')
<style>
    input type{
       border:7px solid black;
    }
    </style>
        <h1 class="Class-record">CLASSES RECORDS</h1>


       <div class="form-border">
        <form action="add" method="POST" enctype = "multipart/form-data" style=margin-left:8px>
        @csrf

            <fieldset>
                <legend>CLass</legend>
                <label>Name :</label>
            <input type = "text" name="name" value  = "Enter Your Name." ><br>

            <label>Subject :</label>
            <input type = "text" name="subject" value  = "Enter Course Name." ><br>

            <label>Course Code: </label>
            <input type = "text" name="course_code" value= "Enter Course Code." required>

            <span><label style="margin-left:45px">Class Period: </label>
            <input type = "number" name="Class_period" value= "Enter Period of Class."  required></span>

            <p><label>Semester:  </label>
            <input type = "text" name="semester" value= "Enter Semester"  required></p>

            <p><label>Branch:</label>
            <input type = "text" name="branch"  value= "Enter Branch Name" style=margin-left:33px></p>
            <input type="submit" class="form-submit" name="submit">
            <fieldset>
        </form>
        </div>
@endsection
