@extends('layouts.app')

@section('content')


                        <style>
                            #menu{
                                display:block;
                                margin:0 auto;
                            }
                            a{
                                cursor:pointer;
                                outline:none;
                            }
                            .item .sector{
                                transition:all .1s linear;
                                fill:#fff;
                                stroke:#111;
                            }
                            .item:hover .sector,.item:focus .sector{fill:#eee;}
                            .menu-trigger{fill:#EA2A55;pointer-events:auto;}
                            .menu-trigger:hover,.menu-trigger:focus{cursor:pointer;}
                            symbol{overflow:visible;}
                        </style>
                <style>
                    .menu-wrapper {
                        position: absolute;
                        height: 432px;
                        width: 50%; /* any width you want */
                        padding-top: 50%; /* if the menu is in full circle mode. 50% if it is in semi-circle mode. */
                    }
                    #menu {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                    }
                </style>
<main class="main-class">
    <div id="survey"></div>
</main>

   <aside class="aside-class">

       <div class="list-group">
           <a href="#" class="foo aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 style="text-align: center;color: white; margin-top: 20px">Survey</h1>
           </a>

           <a href="#" class="foo aside-settings list-group-item list-group-item-action flex-column align-items-start">
               <h1 style="text-align: center;color: white; margin-top: 30px">Wristband</h1>
           </a>

       </div>
   </aside>
<!--
<ul class="collection with-header">
    <li class="collection-header">
        <h2 class="flow-text">Recent Surveys
            <span style="float:right;">
					<a href='{{route('new.survey')}}'>Create new</a>
            </span>
        </h2>
    </li>
    @forelse ($surveys as $survey)
      <li class="collection-item">
        <div>
            {{ route('detail.survey', $survey->name, $survey)}}
            <a href="survey/{{ $survey->id }}" title="Edit Survey" class="secondary-content"><i class="material-icons">view</i></a>
        </div>
        </li>
    @empty
        <p class="flow-text center-align">Nothing to show</p>
    @endforelse
    </ul>
    -->
@endsection
