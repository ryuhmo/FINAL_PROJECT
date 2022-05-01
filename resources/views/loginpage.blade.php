@extends('layouts.layout')
@section('content')
<body>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h2>LOGIN PAGE</h2>

          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h4><a href="/facultydata">Admin Login</a></h4>
                <p>test, this is admin login</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h4><a href="login">Faculty Login</a></h4>
                <p>TEst page,this is faculty login</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hospital-user"></i></div>
                <h4><a href="/facultydata">HOD Login</a></h4>
                <p>testing, this is hod page</p>
              </div>
            </div>



          </div>

        </div>
      </section><!-- End Services Section -->
</body>
</html>
@endsection
