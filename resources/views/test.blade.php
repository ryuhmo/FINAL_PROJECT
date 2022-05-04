<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/form.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faculty Class Record</title>

</head>
<body>


<style>
    input type{
       border:7px solid black;
    }
    </style>
        <h1 class="Class-record">FACULTY CLASS RECORDS</h1>


       <div class="form-border">
           {{-- <form action="rtz" method="POST" enctype = "multipart/form-data">
           @csrf
            <input type="text" name="fname">
            <button type="submit">SUBMIT</button>
           </form> --}}
         <form action="subject" method="POST" enctype = "multipart/form-data" style=margin-left:8px>
        @csrf


            <fieldset>
                <legend><b></b></legend>
                <div class="profile">
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

             <div class="submit">
                 <input type="submit" class="form-submit" name="submit">
             </div>
            <fieldset>
            </div>
        </form>
        </div>
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
              <div class="copyright">
                &copy; Copyright <strong><span>Ryuhmo chozah</span></strong>. All Rights Reserved
              </div>
              <div class="credits">

                Designed by <a href="https://bootstrapmade.com/">Ryuhmo chozah</a>
              </div>
            </div>
    </body>
    </html>

