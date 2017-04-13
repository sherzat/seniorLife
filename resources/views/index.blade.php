@extends('layouts.header')

@section('content')
 {{--   <div class="container" id="home_page">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="title">
                    <h1 sytle="margin-bottom: 16px;">Monitor Your Health For Better Quality of Life</h1>
                </div>
            </div>
        </div>
    </div>--}}


 <div class="sect homeImage container">

     <div class="row">
         <div class="col-sm-10 col-sm-offset-1">
             <div class="title">
                 <h1 sytle="margin-bottom: 16px; color:blue;">Monitor Your Health For Better Quality of Life</h1>
             </div>
         </div>
     </div>

     <div class="row">
         <div class="col-sm-4 col-sm-offset-4" style="text-align: center;">

             <button type="button" class="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="padding-bottom: 0px;">

                 <h2>Sign up Now </h2>

             </button>
         </div>
     </div>

     <div id="myModal" class="modal fade" role="dialog">

         <i class="icon-camera-retro"></i>

         <!-- Modal content-->

<div class="modal-content">
    <img src="img/profile.png">
             <form>
                 <div class="form-input">
                     <input type="username" placeholder="User Name" name="username" style="margin-top: 40px;">

                 </div>

                 <div class="form-input">
                     <input type="email" placeholder="Email" name="email">
                 </div>

                 <div class="form-input">
                     <input type="password" placeholder="Password" name="password">
                 </div>

                 <div class="form-input">
                     <input type="submit" name="Register">
                 </div>

             </form>
</div>
            {{-- <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Registration</h4>
             </div>--}}
{{--
             <div class="modal-body">
                 <div class="ForRegistration">

                     <form action="/homepage.php">
                         <label for="fname">First Name</label>
                         <input type="text" id="fname" name="firstname" placeholder="Your name..">

                         <label for="lname">Last Name</label>
                         <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                         <label for="lname">Password</label>
                         <input type="text" id="lname" name="lastname" placeholder="Your Password..">

                         <input type="submit" value="Submit">
                     </form>
                 </div>

             </div>

             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
             </div>--}}

     </div>

 </div>


 <div class="subSection">


     <div class="col-sm-4" style="height: 100%;">

         <div id="content">
             <img src="img/Share-64.png"  width="320" height="300" alt="" />
             <h1>Share</h1>
             <p>Share your experience with friends and family's. And Let them know you are doing great</p>
         </div>

     </div>
     <div class="col-sm-4" style="height: 100%;">
         <div id="content">
             <img src="img/Pressure_64.png" width="320" height="300" alt="" />
             <h1>Blood Pressure</h1>
             <p> Measure your blood and get to know your self every day for better health </p>

       </div>
     </div>


     <div class="col-sm-4" style="height: 100%;">

         <div id="content">
             <img src="img/Survey-64.png" width="320" height="300" alt="" />
             <h1>Survey</h1>
             <p>By filling our survey you will know your quality of life and we will help you for better achievement  </p>
         </div>
     </div>

 </div>
@endsection