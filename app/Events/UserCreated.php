<?php

namespace App\Events;

use App\Events\Event;
use App\UserModel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserCreated extends Event
{
    use SerializesModels;

    private $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(UserModel $userModel)
    {
        $this->user = $userModel;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
