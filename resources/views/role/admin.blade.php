<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin dashboard</title>
    </head>
    <body>


    <section id="services" class="services">

        <div class="container">

            <div class="inner">
                <center>Admin Dashboard </a></center></p>
              </div>
        </div>
        <br>
        <div class="container">
            <div class="outer">
                <p class="inner"><center><a href="{{url('/addfaculty')}} "><u>Add Faculty </i></a></center></p>
              </div>
        </div>

        <div class="container">

            <div class="outer">
                <p class="inner"><center><a href="{{url('/faculty/adminview')}} "><u>Check Faculty Data </u></a></center></p>
              </div>
        </div>

    </section>

    <style>
        body{
          margin:auto;
          color:black;

        }
        .inner {
              font-size: 3rem;
              font-family: 'Courier New', Courier, monospace;
              border-bottom:5px solid;
              border-bottom-style: solid;
                }



        .outer {

                color: white;
                background-color: rgb(85, 88, 86);
                text-align:center;
                font-size:1.5rem;
                padding:10px;
                border-collapse:collapse;
                border-width:thin;
                border: 2px outset rgb(209, 27, 30);
                }
        a:hover
                {
                color:blue;
                background-color:grey;
                }
            </style>
      </head>
      <body>
    </html>




    </x-app-layout>
    <div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>Ryuhmo chozah</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">Ryuhmo chozah</a>
      </div>
    </div></div>


