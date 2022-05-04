<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="/css/form.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Faculty</title>
        <h1 class="Class-record">|</h1>
        Note: <u>Add members to access the website.</u>
    </head>
    <body>


   <div>

   </div>

       <form action="{{url('/addfaculty')}} " method="POST">
           @csrf
           <fieldset>
            <legend><b></b></legend>
            <div class="profile">
            <div>
                <label>Name :</label>
                <input type="text" name="name" required="">
            </div>

            <div>
                <label>Email :</label>
                <input type="email" name="email" required="">
            </div>

            <div>
                <label>Password :</label>
                <input type="password" name="password" required="">
            </div>
            <div>

                <input type="submit">
            </div>
       </form>

    </div>
</div>
</body>
</html>
<div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>Ryuhmo chozah</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">Ryuhmo chozah</a>
      </div>
    </div></div>

</x-app-layout>

