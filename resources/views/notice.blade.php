@extends('layouts.app')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
    body
    {   
        background:url('/images/nmims_back.png') no-repeat center center;
        background-size: cover; opacity: 20%;
    }
    </style>
    

@endsection


@section('content')

<center>
  <br><br><br>
  <p style="font-family:serif;font-weight: :bolder;font-size:50px; color:black;text-align:center;text-transform:uppercase;" >
    NOTICE  </p>
    <div class="container12">
      <img src="/images/notice.jpg" >
      <div class="centered1">
        <br><br><br><p align="top">1- Parking spaces sc6-sc8 will not be availibe for next week</p><br><br>
        <p>2-Spot reservation is neccesary to park the vehical</p>
        <br><br>
        <p>3-Spot reservation will be canceled if the spot is not <br>occupied within 15mins.</p></div>
<br><br><br><br>
    

</center>
 
 @endsection