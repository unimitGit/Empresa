<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
//use Illuminate\Broadcasting\PrivateChannel;
use App\Message;


class UsuarioCreado implements ShouldBroadcastNow
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;

  public function __construct(Message $message)
  {
      $this->message = $message;
  }

  public function broadcastOn()
  {    
    return ['user.1'];
    
  }

  public function broadcastAs()
  {
      return 'myevent';
  }
}