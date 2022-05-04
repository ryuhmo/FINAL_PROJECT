
<br><br><button type="button" class="btn btn-info" style="position:absolute; right:100px;margin:0"><a href="/test">
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

        /* a:link, a:visited
        {
          text-decoration:none;
          background-color:purple;
          color:wheat;
          display:inline-block;
          padding:20px;
          border:2px  solid wheat;
          border-radius:10px;
          width:50%;

        } */
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





      <table class="table">
        <thead class="thead-dark">
          <tr>

            <th scope="col">Sl.no</th>
            <th scope="col">Name</th>
            <th scope="col">subject</th>
            <th scope="col">course_code</th>
            <th scope="col">Class period Start</th>
            <th scope="col">Class period End</th>

            <th scope="col">semester</th>
            <th scope="col">branch</th>
            <th scope="col">updated</th>
            <th scope="col">created</th>

          </tr>
          </tr>
        </thead>
        @foreach($data as $index=>$post)
        <tbody>
          <tr>

            <td>{{$index+1}}</td>
            <td>{{$post['name']}}</td>
            <td>{{$post['subject']}}</td>
            <td>{{$post['course_code']}}</td>



            <td>
                {{  date('g:i A', strtotime($post['class_period_start'])) }}
            </td>
            <td>
              {{  date('g:i A', strtotime($post['class_period_end'])) }}
            </td>

            <td>{{$post['semester']}}</td>
            <td>{{$post['branch']}}</td>
            <td>

                {{  date('d-M-Y', strtotime($post['created_at'])) }}
                 </td>
            <td>
                {{  date('d-M-Y', strtotime($post['updated_at'])) }}
                <a href={{ "edit/".$post['id'] }} class="btn btn-primary btn-sm">Edit</a>
          <a href={{ "edit/".$post['id'] }} class="btn btn-primary btn-sm">Delete</a>
            </td>

          </tr>
          <tr>
        </tbody>
        @endforeach
      </table>

      </body>
