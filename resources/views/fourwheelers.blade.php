@extends('layouts.app')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
    body
    {   
        background:url('/images/backround_main.jpg') no-repeat center center;
        background-size: cover;
    }
    </style>

@endsection


@section('content')

<center>
  <center>
  <br><br><br>
  <p style="font-family:serif; font-size: 30px; font-weight: bolder;">FOUR WHEELER PARKING MAP</p>
      <br>
    <p style="color: red; font-weight: bolder;">___________________</p>
    <br><br>
  @php
    use App\Slot;
  @endphp
 
 @guest
  <br><br><br>
  <p style="font-family: serif; font-size: 30px;">You need to LogIn first!</p>
  <br><br></rp>
  <a href="/login">Login</a>
  <br><br><br><br><br>
  
  @else
     <table id="bikeparking" width="500px" style="border-collapse: collapse;border: 1px solid black">
      <tr >
         <td bgcolor="white" height="60px"></td>
          <td bgcolor="white" height="60px"></td>
           <td bgcolor="white" height="60px"></td>
            <td bgcolor="white" height="60px"></td>
             <td bgcolor="white" height="60px"></td>
              <td bgcolor="white" height="60px"></td>
               <td bgcolor="white" height="60px"></td>
                <td bgcolor="white" height="60px"></td>
                 <td bgcolor="white" height="60px"></td>
                  <td bgcolor="white" height="60px"></td>
                   <td bgcolor="white" height="60px"></td>
       </tr>
       <tr>
       <td onclick="myfunc()" @php $slot51 = Slot::find(51); @endphp 
          @if($slot51->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/51/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/51/book"> @endif fc1</a> &nbsp</td>
       <td  onclick="myfunc()" @php $slot52 = Slot::find(52); @endphp 
          @if($slot52->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/52/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/52/book""> @endif &nbsp fc2</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot53 = Slot::find(53); @endphp 
          @if($slot53->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/53/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/53/book""> @endif &nbsp fc3</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot54 = Slot::find(54); @endphp 
          @if($slot54->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/54/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/54/book""> @endif &nbsp fc4</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot55 = Slot::find(55); @endphp 
          @if($slot55->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/55/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/55/book""> @endif &nbsp fc5</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot56 = Slot::find(56); @endphp 
          @if($slot56->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/56/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/56/book""> @endif &nbsp fc6</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot57 = Slot::find(57); @endphp 
          @if($slot57->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/57/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/57/book""> @endif &nbsp fc7</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot58 = Slot::find(58); @endphp 
          @if($slot58->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/58/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/58/book""> @endif &nbsp fc8</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot59 = Slot::find(59); @endphp 
          @if($slot59->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/59/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/59/book""> @endif &nbsp fc9</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot60 = Slot::find(60); @endphp 
          @if($slot60->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/60/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/60/book""> @endif &nbsp fc10</a> &nbsp</td>



        <td bgcolor="white" height="60px">&nbsp &nbsp &nbsp</td> 
       </tr>
       <tr >
         <td bgcolor="white" height="60px"></td>
          <td bgcolor="white" height="60px"></td>
           <td bgcolor="white" height="60px"></td>
            <td bgcolor="white" height="60px"></td>
             <td bgcolor="white" height="60px"></td>
              <td bgcolor="white" height="60px"></td>
               <td bgcolor="white" height="60px"></td>
                <td bgcolor="white" height="60px"></td>
                 <td bgcolor="white" height="60px"></td>
                  <td bgcolor="white" height="60px"></td>
                   <td bgcolor="white" height="60px"></td>
       </tr>
       <tr>  
        <td onclick="myfunc()" @php $slot61 = Slot::find(61); @endphp 
          @if($slot61->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/61/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/61/book"> @endif fc11</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot62 = Slot::find(62); @endphp 
          @if($slot62->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/62/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/62/book""> @endif &nbsp fc12</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot63 = Slot::find(63); @endphp 
          @if($slot63->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/63/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/63/book""> @endif &nbsp sc1</a> &nbsp</td>
          <td onclick="myfunc()" @php $slot64 = Slot::find(64); @endphp 
          @if($slot64->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/64/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/64/book""> @endif &nbsp sc2</a> &nbsp</td>
          <td onclick="myfunc()" @php $slot65 = Slot::find(65); @endphp 
          @if($slot65->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/65/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/65/book""> @endif &nbsp sc3</a> &nbsp</td>
          <td onclick="myfunc()" @php $slot66 = Slot::find(66); @endphp 
          @if($slot66->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/66/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/66/book""> @endif &nbsp sc4</a> &nbsp</td>
          <td onclick="myfunc()" @php $slot67 = Slot::find(67); @endphp 
          @if($slot67->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/67/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/67/book""> @endif &nbsp sc5</a> &nbsp</td>
        <td bgcolor="red">sc6</td>
       <td bgcolor="red">sc7</td>
       <td bgcolor="red">sc8</td>
    
          
           <td bgcolor="white" height="60px">&nbsp &nbsp &nbsp</td> 
       </tr>
       <tr >
         <td bgcolor="white" height="60px" style="font-weight: bolder;">ENTRY</td>
          <td bgcolor="white" height="60px"></td>
           <td bgcolor="white" height="60px"></td>
            <td bgcolor="white" height="60px"></td>
             <td bgcolor="white" height="60px"></td>
              <td bgcolor="white" height="60px"></td>
               <td bgcolor="white" height="60px"></td>
                <td bgcolor="white" height="60px"></td>
                 <td bgcolor="white" height="60px"></td>
                  <td bgcolor="white" height="60px"></td>
                   <td bgcolor="white" height="60px"></td>
       </tr>
       <td onclick="myfunc()" @php $slot81 = Slot::find(81); @endphp 
          @if($slot81->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/81/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/81/book"> @endif hc1</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot82 = Slot::find(82); @endphp 
          @if($slot82->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/82/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/82/book""> @endif &nbsp hc2</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot83 = Slot::find(83); @endphp 
          @if($slot83->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/83/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/83/book""> @endif &nbsp hc3</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot84 = Slot::find(84); @endphp 
          @if($slot84->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/84/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/84/book""> @endif &nbsp hc4</a> &nbsp</td>
       <td onclick="myfunc()" @php $slot85 = Slot::find(85); @endphp 
          @if($slot85->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/85/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/85/book""> @endif &nbsp hc5</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot86 = Slot::find(86); @endphp 
          @if($slot86->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/86/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/86/book""> @endif &nbsp sc13</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot87 = Slot::find(87); @endphp 
          @if($slot87->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/87/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/87/book""> @endif &nbsp sc12</a> &nbsp</td>
        <td  onclick="myfunc()" @php $slot88 = Slot::find(88); @endphp 
          @if($slot88->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/88/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/88/book""> @endif &nbsp sc11</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot89 = Slot::find(89); @endphp 
          @if($slot89->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/89/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/89/book""> @endif &nbsp sc10</a> &nbsp</td>
        <td onclick="myfunc()" @php $slot90 = Slot::find(90); @endphp 
          @if($slot90->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/90/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/90/book""> @endif &nbsp sc9</a> &nbsp</td>
           <td bgcolor="white" height="60px"></td>
         <tr >
         <td bgcolor="white" height="60px"></td>
          <td bgcolor="white" height="60px"></td>
           <td bgcolor="white" height="60px"></td>
            <td bgcolor="white" height="60px"></td>
             <td bgcolor="white" height="60px"></td>
              <td bgcolor="white" height="60px"></td>
               <td bgcolor="white" height="60px"></td>
                <td bgcolor="white" height="60px"></td>
                 <td bgcolor="white" height="60px"></td>
                  <td bgcolor="white" height="60px"></td>
                   <td bgcolor="white" height="60px"></td>
       </tr>
      

       <script type="text/javascript">
         function myfunc(){
          alert("Your changes have been saved");
         }

       </script>
     </table>
   <br><br>
     <h5>*The spots shown in red are already taken!*</h5>
     <br><br>


</center>
@endguest
@endsection

