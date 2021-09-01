@extends('trainer.header')

 @section('header')


 @include('trainer.sidenav')
 @include('sweetalert::alert')
 <div class="container">
     <div class="card">
       <div class="circle">
         <h1>1</h1>
       </div>
         <div class="content">
           <h2>
             Add Attendence
           </h2>
           <a href="{{route('user.addatten')}}">Click here</a>
       </div>

     </div>
     <div class="card">
       <div class="circle">
         <h1>2</h1>
       </div>
         <div class="content">
           <h2>
             View Attendence
           </h2>
           <a href="{{route('user.atview')}}">Click here</a>
         </div>


     </div>
     <div class="card">
       <div class="circle">
         <h1>3</h1>
       </div>
         <div class="content">
           <h2>
             Fees paid
           </h2>
           <a href="{{route('user.monthly-fee')}}">Click here</a>

       </div>

     </div>
     {{--<div class="card">
         <div class="circle">
           <h1>3</h1>
         </div>
           <div class="content">
             <h2>
               Delete Attendance
             </h2>
             <a href="d.html">Click here</a>

         </div>

       </div>--}}
      {{-- <div class="card">
         <div class="circle">
           <h1>3</h1>
         </div>
           <div class="content">
             <h2>
               click here to
             </h2>
             <a href="d.html">Click here</a>

         </div>

       </div>
       <div class="card">
         <div class="circle">
           <h1>3</h1>
         </div>
           <div class="content">
             <h2>
               click here to
             </h2>
             <a href="d.html">Click here</a>

         </div>

       </div>--}}


     <div>

     </div>


     </div>
 @endsection
