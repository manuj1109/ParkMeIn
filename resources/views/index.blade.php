@extends('layouts.app')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
.dropbtn {
  background-color: transparent;
  color: white;
  font-family: sans-serif;
  padding: 16px;
  font-size: 29px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: currentColor;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size: 15px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

@endsection


@section('content')


   <center>
    <div class="jumbotron">
      <div class="container">
        <h1 style="color: white"> Welcome to 'Park Me In' </h1>
        <br><br>
        <h2 style="color: white">Getting late?</h2>
        <h3 style="color: white">Don't worry! We got you Parked!</h3>
      </div>
<br><br><br><br><br><br>
      @php
        $total = DB::table('slots')->count();
        $count = DB::table('slots')->where('occupied','no')->count();   
        $faculty = DB::table('slots')->where('special','faculty')->count();   
        $handicap = DB::table('slots')->where('special','handicap')->count();   
        $booked = $total-$count;
         
        @endphp
          <div style="display: inline-block; padding: 20px; font-weight: bold; font-size: 30px; color: white;">
  <div class="dropdown">
  <button class="dropbtn">OPEN : {{$count}}</button>
  <div class="dropdown-content">
    <a href="/twowheelers">Two Wheelers</a>
    <a href="/fourwheelers">Four Wheelers</a>
  </div>
</div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              RESERVED : {{$booked}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              FACULTY : {{$faculty}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            HANDICAP : {{$handicap}}</div>
            
            
            
   </center>


    <br><section id="section1b">  <br><br>  <br><br>
    <p style="font-family: sans-serif;font-size:  30px;"><br>HOW IT WORKS: IN 3 EASY STEPS</p>
    <br><p style="color: red;font-weight: bolder;">___________________</p>
    <br><br><br><br>
    <div class="row1"> 
      <div class="column1">
        <div id="f1_container">
          <div id="f1_card" class="shadow">
            <div class="front face">
              <img src="/images/step1.png" height="160px" width="160px" style="border-radius: 30%">

             
            </div>
            <div class="back face center" style="border-radius: 20%">
              <p style="font-family: sans-serif;font-size:  20px;"><br>
              Open the website</p>
            </div>
          </div>
        </div>
         <p style="font-family: sans-serif;font-size:  20px;">STEP 1</p>
      </div>
      <div class="column1" style="margin-left:-20px;">
        <div id="f1_container">
          <div id="f1_card" class="shadow">
            <div class="front face">
              <img src="/images/step2.png" height="160px" width="160px" style="border-radius: 30%">
             
            </div>
            <div class="back face center" style="border-radius: 20%">
              <p style="font-family: sans-serif;font-size:  20px;"><br>Locate the free space</p>
            </div>
          </div>
        </div>
         <p style="font-family: sans-serif;font-size:  20px;">STEP 2</p>
      </div>
      <div class="column1">
        <div id="f1_container">
          <div id="f1_card" class="shadow">
            <div class="front face">
              <img src="/images/step3.png" height="160px" width="160x" style="border-radius: 30%">
             
            </div>
            <div class="back face center" style="border-radius: 20%">
              <p style="font-family: sans-serif;font-size:  20px;"><br>Reserve the spot</p>
            </div>
          </div>
        </div>
         <p style="font-family: sans-serif;font-size:  20px;">STEP 3<br><br><br></p>
     </div>
     <br><br>
   </section>
     
     <div style="background-image:url(/images/nmi.png);height: 400px ">
       <h1 style="color: black; padding: 50px;font-family: sans-serif;"><br><br>Park me in is an initiative by the ABC University in order to simplify the parking managemnt services in the college premises.
      This initiative was inaugrated by Mr.Sailesh Mahisker(Assosiate Dean ABC) on 31st of August 2020.
      </h1>
    </div> 
  
      
    

    



    

@endsection
