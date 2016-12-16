<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use App;

class ChatMessageWasReceived implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $chatMessage;
    public $user;

    /**
     * ChatMessageWasReceived constructor.
     *
     * @param $chatMessage
     * @param $user
     */
    public function __construct(App\ChatMessage $chatMessage, App\User $user)
    {
        $this->chatMessage = $chatMessage;
        $this->user        = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['my-channel'];
    }
}
