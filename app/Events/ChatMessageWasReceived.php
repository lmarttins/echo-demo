<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Event;
use App;

class ChatMessageWasReceived extends Event implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    private $chatMessage;
    private $user;

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
        return ['chat-room.1'];
    }
}
