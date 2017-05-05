@extends('layouts.app')

@section('content')
<div class="menu-wrapper">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="-2 -2 504 290" id="menu"
        style="transform-origin: 50% 50% 0px; transform: translate3d(0px, 0px, 0px); touch-action: none; user-select: none;">
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
        <g id="symbolsContainer">
            <symbol class="icon icon-" id="icon-1" viewBox="0 0 69 69">
                <!--Replace the contents of this symbol with the content of your icon-->
                <rect fill="none" stroke="#111" stroke-width="1" width="100%" height="100%"></rect>
                <text fill="#222" x="50%" y="50%" dy=".3em" text-anchor="middle" font-size="1.2em">1</text>
            </symbol>

            <symbol class="icon icon-" id="icon-2" viewBox="0 0 69 69">
                <!--Replace the contents of this symbol with the content of your icon-->
                <rect fill="none" stroke="#111" stroke-width="1" width="100%" height="100%"></rect>
                <text fill="#222" x="50%" y="50%" dy=".3em" text-anchor="middle" font-size="1.2em">2</text>
            </symbol>

            <symbol class="icon icon-" id="icon-3" viewBox="0 0 69 69">
                <!--Replace the contents of this symbol with the content of your icon-->
                <rect fill="none" stroke="#111" stroke-width="1" width="100%" height="100%"></rect>
                <text fill="#222" x="50%" y="50%" dy=".3em" text-anchor="middle" font-size="1.2em">3</text>
            </symbol>

            <symbol class="icon icon-" id="icon-4" viewBox="0 0 69 69">
                <!--Replace the contents of this symbol with the content of your icon-->
                <rect fill="none" stroke="#111" stroke-width="1" width="100%" height="100%"></rect>
                <text fill="#222" x="50%" y="50%" dy=".3em" text-anchor="middle" font-size="1.2em">4</text>
            </symbol>

            <symbol class="icon icon-" id="icon-5" viewBox="0 0 69 69">
                <!--Replace the contents of this symbol with the content of your icon-->
                <rect fill="none" stroke="#111" stroke-width="1" width="100%" height="100%"></rect>
                <text fill="#222" x="50%" y="50%" dy=".3em" text-anchor="middle" font-size="1.2em">5</text>
            </symbol>

        </g>

        <g id="itemsContainer">
            <a class="item" id="item-1" role="link" tabindex="0" xlink:href=" " xlink:title=" " transform="matrix(1,0,0,1,0,0)" data-svg-origin="250 250" style="">
                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" class="sector"></path>
                <use xlink:href="#icon-1" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
            </a>

            <a class="item" id="item-2" role="link" tabindex="0" xlink:href=" " xlink:title=" " transform="matrix(0.80901,-0.58778,0.58778,0.80901,-99.20056166685515,194.69206447938143)" data-svg-origin="250 250" style="">
                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" class="sector"></path>
                <use xlink:href="#icon-2" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
            </a>

            <a class="item" id="item-3" role="link" tabindex="0" xlink:href=" " xlink:title=" " transform="matrix(0.30901,-0.95105,0.95105,0.30901,-65.01837766752521,410.5098804800515)" data-svg-origin="250 250" style="">
                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" class="sector"></path>
                <use xlink:href="#icon-3" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
            </a>

            <a class="item" id="item-4" role="link" tabindex="0" xlink:href=" " xlink:title=" " transform="matrix(-0.30901,-0.95105,0.95105,-0.30901,89.49011951994842,565.0183776675252)" data-svg-origin="250 250" style="">
                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" class="sector"></path>
                <use xlink:href="#icon-4" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
            </a>

            <a class="item" id="item-5" role="link" tabindex="0" xlink:href=" " xlink:title=" " transform="matrix(-0.80901,-0.58778,0.58778,-0.80901,305.3079355206185,599.2005616668552)" data-svg-origin="250 250" style="">
                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" class="sector"></path>
                <use xlink:href="#icon-5" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
            </a>
        </g>
        <g id="trigger" class="trigger menu-trigger" role="button">
            <circle cx="250" cy="250" r="30"></circle>

        </g>
    </svg>
</div>

<style>
    .menu-wrapper {
        position: relative;
        height: 0;
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
@endsection
