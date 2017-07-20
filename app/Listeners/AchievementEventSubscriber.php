<?php

namespace App\Listeners;

class AchievementEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function onRegister($event) {
      $id = \App\Achievement::select('id')
          ->where('title','Welcome aboard')
          ->get();
      Auth::user()->achievements()->attach($id);
    }

    /**
     * Handle user logout events.
     */
    public function onFirstSurvey($event) {
      $achievement_id = \App\Achievement::select('id')
          ->where('title','First survey')
          ->get();
      $user_id = Auth::id();

      DB::table('achievement_user')->insert(
        ['user_id' => $user_id, 'achievement_id' => $achievement_id, 'complete_rate'=>1, 'is_achieved'=>true ]
      );
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'App\Events\Registered',
            'App\Listeners\AchievementEventSubscriber@onRegister'
        );

        $events->listen(
            'App\Events\FirstSurvey',
            'App\Listeners\AchievementEventSubscriber@onFirstSurvey'
        );
    }

}
