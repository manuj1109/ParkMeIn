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
  <br><br><br>
  <p style="font-family:serif; font-size: 30px; font-weight: bolder;">TWO WHEELER PARKING MAP</p>
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

     <table id="bikeparking" width="500px" style="border-collapse: collapse;border: 1px solid black;">
       <tr>
       <td onclick="myfunc1()" @php $slot1 = Slot::find(1); @endphp 
          @if($slot1->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/1/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/1/book"> @endif f1</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot2 = Slot::find(2); @endphp 
          @if($slot2->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/2/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/2/book""> @endif &nbsp f2</a> &nbsp</td>
       <td  onclick="myfunc1()" @php $slot3 = Slot::find(3); @endphp 
          @if($slot3->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/3/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/3/book""> @endif &nbsp f3</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot4 = Slot::find(4); @endphp 
          @if($slot4->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/4/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/4/book""> @endif &nbsp f4</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot5 = Slot::find(5); @endphp 
          @if($slot5->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/5/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/5/book""> @endif &nbsp f5</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot6 = Slot::find(6); @endphp 
          @if($slot6->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/6/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/6/book""> @endif &nbsp f6</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot7 = Slot::find(7); @endphp 
          @if($slot7->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/7/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/7/book""> @endif &nbsp f7</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot8 = Slot::find(8); @endphp 
          @if($slot8->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/8/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/8/book""> @endif &nbsp f8</a> &nbsp</td>
        <td onclick="myfunc1()"  @php $slot9 = Slot::find(9); @endphp 
          @if($slot9->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/9/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/9/book""> @endif &nbsp f9</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot10 = Slot::find(10); @endphp 
          @if($slot10->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/10/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/10/book""> @endif &nbsp f4</a> &nbsp</td>



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
        <td onclick="myfunc1()" @php $slot11 = Slot::find(11); @endphp 
          @if($slot11->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/11/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/11/book"> @endif f11</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot12 = Slot::find(12); @endphp 
          @if($slot12->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/12/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/12/book""> @endif &nbsp f12</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot13 = Slot::find(13); @endphp 
          @if($slot13->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/13/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/13/book""> @endif &nbsp f13</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot14 = Slot::find(14); @endphp 
          @if($slot14->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/14/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/14/book""> @endif &nbsp f14</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot15 = Slot::find(15); @endphp 
          @if($slot15->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/15/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/15/book""> @endif &nbsp f15</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot16 = Slot::find(16); @endphp 
          @if($slot16->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/16/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/16/book""> @endif &nbsp f16</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot17 = Slot::find(17); @endphp 
          @if($slot17->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/17/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/17/book""> @endif &nbsp f17</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot18 = Slot::find(18); @endphp 
          @if($slot18->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/18/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/18/book""> @endif &nbsp f18</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot19 = Slot::find(19); @endphp 
          @if($slot19->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/19/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/19/book""> @endif &nbsp f19</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot20 = Slot::find(20); @endphp 
          @if($slot20->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/20/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/20/book""> @endif &nbsp f20</a> &nbsp</td>
           <td bgcolor="white" height="60px">&nbsp &nbsp &nbsp</td> 
       </tr>
       <tr>
       <td onclick="myfunc1()" @php $slot21 = Slot::find(21); @endphp 
          @if($slot21->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/21/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/21/book"> @endif s1</a> &nbsp</td>
       <td  onclick="myfunc1()" @php $slot22 = Slot::find(22); @endphp 
          @if($slot22->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/22/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/22/book""> @endif &nbsp s2</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot23 = Slot::find(23); @endphp 
          @if($slot23->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/23/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/23/book""> @endif &nbsp s3</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot24 = Slot::find(24); @endphp 
          @if($slot24->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/24/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/24/book""> @endif &nbsp s4</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot25 = Slot::find(25); @endphp 
          @if($slot25->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/25/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/25/book""> @endif &nbsp s5</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot26 = Slot::find(26); @endphp 
          @if($slot26->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/26/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/26/book""> @endif &nbsp s6</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot27 = Slot::find(27); @endphp 
          @if($slot27->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/27/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/27/book""> @endif &nbsp s7</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot28 = Slot::find(28); @endphp 
          @if($slot28->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/28/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/28/book""> @endif &nbsp s8</a> &nbsp</td>
        <td onclick="myfunc1()"  @php $slot29 = Slot::find(29); @endphp 
          @if($slot29->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/29/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/29/book""> @endif &nbsp s9</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot30 = Slot::find(30); @endphp 
          @if($slot30->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/30/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/30/book""> @endif &nbsp s10</a> &nbsp</td>
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
       <td onclick="myfunc1()" @php $slot31 = Slot::find(31); @endphp 
          @if($slot31->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/31/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/31/book"> @endif s11</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot32 = Slot::find(32); @endphp 
          @if($slot32->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/32/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/32/book""> @endif &nbsp s2</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot33 = Slot::find(33); @endphp 
          @if($slot33->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/33/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/33/book""> @endif &nbsp s13</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot34 = Slot::find(34); @endphp 
          @if($slot34->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/34/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/34/book""> @endif &nbsp s14</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot35 = Slot::find(35); @endphp 
          @if($slot35->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/35/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/35/book""> @endif &nbsp s15</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot36 = Slot::find(36); @endphp 
          @if($slot36->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/36/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/36/book""> @endif &nbsp s16</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot37 = Slot::find(37); @endphp 
          @if($slot37->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/37/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/37/book""> @endif &nbsp s17</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot38 = Slot::find(38); @endphp 
          @if($slot38->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/38/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/38/book""> @endif &nbsp s18</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot39 = Slot::find(39); @endphp 
          @if($slot39->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/39/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/39/book""> @endif &nbsp s19</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot40 = Slot::find(40); @endphp 
          @if($slot40->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/40/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/30/book""> @endif &nbsp s20</a> &nbsp</td>
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
       <tr>  
       <td onclick="myfunc1()" @php $slot41 = Slot::find(41); @endphp 
          @if($slot41->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/41/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/41/book"> @endif h1</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot42 = Slot::find(42); @endphp 
          @if($slot42->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/42/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/42/book""> @endif &nbsp h2</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot43 = Slot::find(43); @endphp 
          @if($slot43->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/43/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/43/book""> @endif &nbsp h3</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot44 = Slot::find(44); @endphp 
          @if($slot44->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/44/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/44/book""> @endif &nbsp h4</a> &nbsp</td>
       <td onclick="myfunc1()" @php $slot45 = Slot::find(45); @endphp 
          @if($slot45->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/45/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/45/book""> @endif &nbsp h5</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot46 = Slot::find(46); @endphp 
          @if($slot46->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/46/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/46/book""> @endif &nbsp h6</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot47 = Slot::find(47); @endphp 
          @if($slot47->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/47/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/47/book""> @endif &nbsp h7</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot48 = Slot::find(48); @endphp 
          @if($slot48->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/48/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/48/book""> @endif &nbsp h8</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot49 = Slot::find(49); @endphp 
          @if($slot49->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/49/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/49/book""> @endif &nbsp h9</a> &nbsp</td>
        <td onclick="myfunc1()" @php $slot50 = Slot::find(50); @endphp 
          @if($slot50->occupied=='yes') bgcolor="red" height="75px" onclick="toggle(this)">&nbsp <a href="/slot/50/release">  @else bgcolor="green"  height="75px" onclick="toggle(this)">&nbsp <a href="/slot/50/book""> @endif &nbsp h10</a> &nbsp</td>
           <td bgcolor="white" height="60px"></td>

       </tr>
     </table>
     <br><br>
     <h5>*The spots shown in red are already taken!*</h5>
     <br><br>
 <script type="text/javascript">
   function myfunc1(){
    alert("Your changes have been saved");
   }
 </script>

 
 


</center>
@endguest
@endsection