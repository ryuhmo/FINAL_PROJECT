
<button type="button" class="btn btn-info" style="position:absolute; right:100px;margin:0"><a href="/test">
    Add Class</a></button><br><br>

<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>FACULTY RECORDS</h2>

      </div>
    </section>

    <style>
        body{
          margin:auto;
          color:black;

        }
          .button
          {
          background-color:red;
          border:none;
          color:wheat;
          text-decoration:none;
          padding:16px 32px;
          margin:25px;
          margin-left: 2px;
          border-radius:10px;
          width:40%;
          }

          .submit
          {
          background-color:green;
          border:none;
          color:wheat;
          text-decoration:none;
          padding:16px 32px;
          margin:25px;
          margin-left: 300px;
          border-radius:10px;
          }


      input[type=button]:hover, input[type=submit]:hover{
        color:blue;
        background-color:grey;
      }
      table {
          font-family:arial, sans-serif;
          border-collapse: collapse;
          width:100%;

      }
        th, td:nth-child(odd){
          border:1px solid black;
          background:#eee;
          text-align:left;
          padding:8px;
          color:black;
        }
        td:nth-child(even){
          border:1px solid black;
          background:white;
          text-align:left;
          padding:8px;
        }

        .formsubmit {

        }

        a:link, a:visited
        {
          text-decoration:none;
          background-color:purple;
          color:wheat;
          display:inline-block;
          padding:20px;
          border:2px  solid wheat;
          border-radius:10px;
          width:50%;

        }
        a:hover
        {
         color:blue;
         background-color:grey;
        }
        .borderview{
            border:8px groove rgba(62,30,30,1);;
            margin:8px;

        }




      </style>
      </head>
      <body>

          <form action="{{ url('/search') }}" method="get">
            @csrf
              <input type="search" class="sr" name="search" placeholder="Search Registration No.">
              <button type="submit" id="search">Search</button>
              </form>
              <h1>Note:</h1>
              <h4>Search your data with Your Registration No.</h4>



      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">update</th>
            <th scope="col">update</th>

          </tr>
          </tr>
        </thead>
        @foreach($nice as $student)
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{$student['id']}}</td>
            <td>{{$student['fname']}}</td>
            <td>{{$student['created_at']}}</td>
            <td>{{$student['updated_at']}}</td>
          </tr>
          <tr>
        </tbody>
        @endforeach
      </table>


      </body>
