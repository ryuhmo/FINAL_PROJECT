@extends('layouts.layout')
@section('content')

<h2 class="welcome"> NIT MIZORAM</h2>
@if (session('success'))
<h2 style="text-align:center">{{session('success')}}</h2>
<a href=""></a>
@endif<br><br><br>
<div class="mark">Please click <mark>Home Button</mark> to back to Main Menu<br><i class="bi bi-chevron-double-down"></i></div>
<a class="mainhome" href="{{ url('/') }}">
 <div class="subhome"><i class="bi bi-arrow-return-right"></i>Home</div>
                </a>

                <style>
                .mark{
                    text-align:center;
                    color:red;
                }
                      .subhome
                      {

                        text-align:center;
                        border-bottom:6px solid red;
                        background: lightgrey;
                        margin:50px;
                      }
                      .mainhome{
                          color:black;
                      }
                </style>




@endsection
