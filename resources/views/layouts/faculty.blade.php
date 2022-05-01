<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{asset('css/footer.css') }}">
    <title>HOOME PAGE</title>
</head>
<body>
    <div class="f">
        @yield('content')
    </div>

@yield('footer')
<footer class="footer">..................................................................

    <p style="text-align:center">Copyright 2021</p><br>
    <p style="text-align:center">Design by: Ryuhmo</p>

    <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
            <a href="#"><i class="fa fa-facebook-official"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</footer>
</body>
</html>
