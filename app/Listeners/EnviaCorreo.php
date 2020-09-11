<?php

namespace App\Listeners;
use App\Events\UsuarioCreado;
use App\Jobs\SendEmailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Message;


class EnviaCorreo
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
     * @param  UsuarioCreado  $event
     * @return void
     */
    public function handle(UsuarioCreado $event)    
    {        
        if (isset($event)){
            if (isset($event->message)){                
                $message = $event->message;
                $enviar = $message->getAttribute('message');
                dispatch(new SendEmailJob($enviar));
                //echo "se ha enviado el correo";
            }
        }else{
            echo "Error al enviar correo";
        }
            
    }
}