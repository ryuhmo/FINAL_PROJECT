@extends('layouts.faculty')
@section('content')
<body>


<br>
<h2 class="welcome" >FACULTY RECORDS</h2><br><br><br>
<p id="go">National Institute of Technology, Mizoram</p>
<div style="pic"><img src="/img/nitmz1.jpg" alt="dg logo" width="180px" height="140px"><br><br>

</div>
<div class="menu-bar">

                <ul>
                    <li class="biz"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fa fa-user"></i>About Us</a></li>

                    <li><a href="#"><i class="fa fa-clone"></i>Services</a></li>

                    <li><a href="#"><i class="fa fa-sign-in"></i>Logins<i class="fa fa-caret-down"></i></a>
                    <div class="sub-menu-1">
                          <ul>
                              <div class="drop">
                              <li><a href="/login">ADMINISTRATOR </a><i class="fa fa-angle-double-right"></i></li>
                              <li><a href="/login"><i class="fa fa-angle-double-right"></i>HOD LOGIN</a></li>
                              <li><a href="/login">FACULTY LOGIN</a><i class="fa fa-angle-double-right"></i></li>
                              </div>

                          </ul>
                      </div>
                   </li>


                    <li><a href="/contact-us"><i class="fa fa-phone"></i>Contact Us</a></li>
                </ul>
              </div>

</body>
</html>
@endsection
