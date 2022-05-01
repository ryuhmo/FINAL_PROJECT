<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSC Page</title>



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
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


</body>
</html>
