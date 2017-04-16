@extends('layouts.app')

@section('content')

<main class="main-class">
<section class="section-settings">
    <header style="background-color: teal;height: 70px;color: white;padding-top: 12px;padding-right: 5px"><h2>Overall Result of Survey</h2></header>

    <article>
        <p style="font-size: 48px; color: black;text-align: center;padding-top: 12px;"> Your Score 78% it is ranked Good</p>
        <p style="color: black;text-align: center;padding-top: 12px;">For more information click here</p>
    </article>

</section>
    <section class="section-settings">
        <header style="background-color: teal;height: 70px;color: white;padding-top: 12px;padding-right: 5px">
            <h2>
            Overall Result of Wristband
            </h2>

        </header>
    </section>
</main>

   <aside class="aside-class">

       <div class="list-group">
           <a href="#" class="foo aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 style="text-align: center;color: white; margin-top: 20px">General Overview</h1>
           </a>

           <a href="#" class="foo aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 style="text-align: center;color: white; margin-top: 30px">Survey Results</h1>
           </a>

           <a href="#" class="foo aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 style="text-align: center;color: white; margin-top: 72px">Wristband</h1>
           </a>

           <a href="#" class="foo aside-settings list-group-item list-group-item-action flex-column align-items-start">

              <h1 style="text-align: center;color: white; margin-top: 72px">Share</h1>

           </a>
       </div>
   </aside>

@endsection

