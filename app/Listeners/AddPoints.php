<?php

namespace App\Listeners;

use App\Events\Points;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class AddPoints
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
     * @param  Points  $event
     * @return void
     */
    public function handle(Points $event)
    {
      $user= Auth::user();
      $old_point= $user->point;
      $addon_point=$event->points;

      $user->update(['point' => $old_point + $addon_point]); //update the new point for user

    }
}
