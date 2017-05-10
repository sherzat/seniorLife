<?php

namespace App\Listeners;
use App\Events\Onregister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
class AttachAchievement
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Onregister  $event
     * @return void
     */
    public function handle(Onregister $event)
    {
        $id = \App\Achievement::select('id')
            ->where('title','welcome aboard')
            ->get();
        Auth::user()->achievements()->attach($id);
    }
}
