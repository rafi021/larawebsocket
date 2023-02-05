<?php

declare(strict_types =1);

namespace App\Http\Controllers;

use Pusher\Pusher;
use Illuminate\Http\Request;
use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;


class SocketController extends Controller
{
    public function connect(Request $request)
    {
        $boardcaster = new PusherBroadcaster(
            new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                []
            )
        );

        return $boardcaster->validAuthenticationResponse($request, []);
    }
}
