@extends('layouts.app')

@section('content')


<main class="main-class">
<section class="section-settings">
    <header class="header-setting"><h2>Overall Result of Survey</h2></header>

    <article>
        <p style="font-size: 48px; color: black;text-align: center;padding-top: 12px;"> Your Score is 78% it is ranked Good</p>
        <p style="color: black;text-align: center;padding-top: 12px;">For more information click here</p>
    </article>

</section>
<section class="section-settings">
    <header class="header-setting">
        <h2>
            Overall Result of Wristband
        </h2>
    </header>
</section>
</main>


<aside class="aside-class">

       <div class="list-group">
           <a href="#" id="button1" onclick="getclicked(this.id);" class="active aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 class="text-settings">Overview</h1>
               <p style="text-align: center">
                   See your overall activities and results
               </p>
           </a>

           <a href="#" id="button2" onclick="getclicked(this.id);" class="single aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 class="text-settings">Survey</h1>
               <p style="text-align: center">Start your self-assessment by filling survey questionnaire  </p>
           </a>

           <a href="#" id="button3" onclick="getclicked(this.id);" class="single aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 class="text-settings">Wristband</h1>
               <p style="text-align: center">Use your  blood pressure measurement for quick self-assessment </p>
           </a>

           <a href="#" id="button4" onclick="getclicked(this.id);" class="single aside-settings list-group-item list-group-item-action flex-column align-items-start">

              <h1 class="text-settings">Share</h1>
               <p style="text-align: center">If you want to share your results with family and friends </p>

           </a>
       </div>
   </aside>
@endsection

