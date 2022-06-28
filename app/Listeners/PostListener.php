<?php

namespace App\Listeners;

use App\Models\User\User;
use App\Notifications\PostNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class PostListener
{

    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        // User::all()
        //         ->except($this->post->author_id)
        //         ->each(function(User $user) use ($notification){
        //             $user->notify(new PostNotification($notification));
        // });
            User::all()
                ->except($event->post->id)
                ->each(function(User $user) use ($event){
                    Notification::send($user, new PostNotification($event->post));
            });
    }
}
